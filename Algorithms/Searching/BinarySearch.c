//Write an algorithm and program in C to search particular data from an array using a recursive Binary search approach.

#include <stdio.h>

int main() {
    int n;

    // Step 1: Input the number of elements in the sorted array
    printf("Enter the number of elements in the sorted array: ");
    scanf("%d", &n);

    int arr[n];

    // Step 2: Input the elements of the sorted array
    printf("Enter the elements of the sorted array:\n");
    for (int i = 0; i < n; i++) {
        scanf("%d", &arr[i]);
    }

    int key;

    // Step 3: Input the element to search
    printf("Enter the element to search: ");
    scanf("%d", &key);

    int low = 0;
    int high = n - 1;
    int found = 0; // Flag to track whether the element is found
    int index = -1; // To store the index of the found element

    // Step 4: Recursive binary search
    while (low <= high) {
        int mid = (low + high) / 2;

        if (arr[mid] == key) {
            found = 1; // Set the flag to indicate the element is found
            index = mid; // Store the index of the found element
            break; // Exit the loop since the element is found
        } else if (arr[mid] > key) {
            high = mid - 1; // Update the high index for the left subarray
        } else {
            low = mid + 1; // Update the low index for the right subarray
        }
    }

    // Step 5: Display the result
    if (found) {
        printf("Element %d found at index %d.\n", key, index);
    } else {
        printf("Element %d not found in the array.\n", key);
    }

    return 0;
}
