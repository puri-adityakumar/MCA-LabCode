#include <stdio.h>

int main() {
    int n;
    
    printf("Enter the number of elements in the array: ");
    scanf("%d", &n);
    
    int arr[n];
    
    printf("Enter the elements of the array:\n");
    for (int i = 0; i < n; i++) {
        scanf("%d", &arr[i]);
    }
    
    int key;
    
    printf("Enter the element to search: ");
    scanf("%d", &key);
    
    int found = 0; // Flag to track whether the element is found
    int index = -1; // To store the index of the found element
    
    // Linear search
    for (int i = 0; i < n; i++) {
        if (arr[i] == key) {
            found = 1; // Set the flag to indicate the element is found
            index = i; // Store the index of the found element
            break; // Exit the loop since the element is found
        }
    }
    
    if (found) {
        printf("Element %d found at index %d.\n", key, index);
    } else {
        printf("Element %d not found in the array.\n", key);
    }
    
    return 0;
}
