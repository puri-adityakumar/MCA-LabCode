#include<stdio.h>

int main() {
    int processes, resources, i, j, k;

    printf("Enter the number of processes: ");
    scanf("%d", &processes);
    printf("Enter the number of resources: ");
    scanf("%d", &resources);

    int allocation[processes][resources], max[processes][resources], need[processes][resources];
    int available[resources], work[resources], finish[processes];

    // Input allocation matrix
    printf("Enter allocation matrix:\n");
    for(i = 0; i < processes; i++) {
        for(j = 0; j < resources; j++) {
            scanf("%d", &allocation[i][j]);
        }
    }

    // Input max matrix
    printf("Enter max matrix:\n");
    for(i = 0; i < processes; i++) {
        for(j = 0; j < resources; j++) {
            scanf("%d", &max[i][j]);
        }
    }

    // Input available vector
    printf("Enter available vector:\n");
    for(i = 0; i < resources; i++) {
        scanf("%d", &available[i]);
    }

    // Calculate need matrix
    for(i = 0; i < processes; i++) {
        for(j = 0; j < resources; j++) {
            need[i][j] = max[i][j] - allocation[i][j];
        }
    }

    // Initialize work vector and finish array
    for(i = 0; i < resources; i++) {
        work[i] = available[i];
    }
    for(i = 0; i < processes; i++) {
        finish[i] = 0;
    }

    // Main Banker's Algorithm logic
    int count = 0;
    int safeSequence[processes];
    while(count < processes) {
        int found = 0;
        for(i = 0; i < processes; i++) {
            if(finish[i] == 0) {
                int canBeAllocated = 1;
                for(j = 0; j < resources; j++) {
                    if(need[i][j] > work[j]) {
                        canBeAllocated = 0;
                        break;
                    }
                }
                if(canBeAllocated) {
                    for(k = 0; k < resources; k++) {
                        work[k] += allocation[i][k];
                    }
                    safeSequence[count++] = i;
                    finish[i] = 1;
                    found = 1;
                }
            }
        }
        if(found == 0) {
            printf("System is in unsafe state!\n");
            return 0;
        }
    }

    printf("System is in safe state!\nSafe sequence is: ");
    for(i = 0; i < processes; i++) {
        printf("%d ", safeSequence[i]);
    }
    printf("\n");

    return 0;
}
