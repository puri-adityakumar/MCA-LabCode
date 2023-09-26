//Write a program to delete an elementy from the beggining of the array

#include <stdio.h>

int main(void)
{
    int a[100], i, n;

    // Ask the user to input the length of the array
    printf("Enter the length of array: ");
    scanf("%d", &n);

    // Ask the user to input 'n' elements for the array
    printf("Enter the elements for the array: ");
    for (i = 0; i < n; i++) {
        scanf("%d", &a[i]);
    }

    // Shift the elements of the array to the left by one position
    for (i = 0; i < n; i++) {
        a[i] = a[i + 1];
    }

    // Print the modified array, which now has one less element
    for (i = 0; i < n - 1; i++) {
        printf("%d", a[i]);
    }

    return 0;
}
