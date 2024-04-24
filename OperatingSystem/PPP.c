// write a c program to implement priority scheduling algorithm
#include <stdio.h>
double avgFromArr(int arr[], int arrSize)
{
    double sum = 0.0;
    for (int i = 0; i < arrSize; i++)
    {
        sum = sum + arr[i];
    }
    double avg = sum / (double)arrSize;
    return avg;
}

void main()
{
    int p;
    printf("Enter number of process: ");
    scanf("%d", &p);
    int at[p], bt[p], ct[p], tat[p], wt[p], process[p], priority[p];
    printf("Enter brust time: ");
    for (int i = 0; i < p; i++)
    {
        scanf("%d", &bt[i]);
    }
    printf("Enter the priority: ");
    for (int i = 0; i < p; i++)
    {
        scanf("%d", &priority[i]);
    }

    for (int i = 0; i < p; i++)
    {
        process[i] = i + 1;
    }
    for (int i = 0; i < p; i++)
    {
        for (int j = 0; j < p - i - 1; j++)
        {
            if (priority[j] > priority[j + 1])
            {
                int temp = priority[j];
                priority[j] = priority[j + 1];
                priority[j + 1] = temp;
                temp = process[j];
                process[j] = process[j + 1];
                process[j + 1] = temp;
                temp = bt[j];
                bt[j] = bt[j + 1];
                bt[j + 1] = temp;
            }
        }
    }

    ct[0] = bt[0];
    for (int i = 1; i < p; i++)
    {
        ct[i] = bt[i] + ct[i - 1];
    }

    for (int i = 0; i < p; i++)
    {
        at[i] = 0;
        tat[i] = ct[i] - at[i];
        wt[i] = tat[i] - bt[i];
    }
    printf("\nP\tAT\tBT\tPR\tCT\tTAT\tWT\n");
    for (int i = 0; i < p; i++)
    {
        printf("\np%d\t%d\t%d\t%d\t%d\t%d\t%d", process[i], at[i], bt[i], priority[i], ct[i], tat[i], wt[i]);
    }

    float avgTAT = avgFromArr(tat, p);
    float avgWT = avgFromArr(wt, p);
    printf("\n\nAverage TAT: %.2f\nAverage WT: %.2f\n\n", avgTAT, avgWT);
}
