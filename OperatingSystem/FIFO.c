#include <stdio.h>

int main() {
    int i, j, n, a[50], frame[10], no, k, avail, count = 0;

    // Prompt user for number of reference string
    printf("\n Enter the number of reference string:\n");
    scanf("%d", &n);

    // Prompt user for reference string
    printf("\n Enter the reference string:\n");
    for (i = 1; i <= n; i++)
        scanf("%d", &a[i]);

    // Prompt user for number of frames
    printf("\n Enter the number of frames:");
    scanf("%d", &no);

    // Initialize frame array with -1
    for (i = 0; i < no; i++)
        frame[i] = -1;

    j = 0;

    // Print reference string and page frames
    printf("\n\tref string\t page frames\n");
    for (i = 1; i <= n; i++) {
        printf("%d\t\t", a[i]);

        // Check if page is already in frame
        avail = 0;
        for (k = 0; k < no; k++)
            if (frame[k] == a[i])
                avail = 1;

        // If page is not in frame, add it and increment count
        if (avail == 0) {
            frame[j] = a[i];
            j = (j + 1) % no;
            count++;

            // Print updated page frames
            for (k = 0; k < no; k++)
                printf("%d\t", frame[k]);
        }
        printf("\n");
    }

    // Print number of page faults and hits
    printf("Page Fault Is %d", count);
    int hit = n - count;
    printf("\n no. of hit is %d", hit);

    return 0;
}
