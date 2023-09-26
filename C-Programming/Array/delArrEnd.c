//Write a program to delete an element from the end of the array

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
    printf("\nUpdated array after deletion : ");

    // Print the modified array, which now has one less element
    for (i = 0; i < n - 1; i++) {
        printf("%d", a[i]);
    }

    return 0;
}
