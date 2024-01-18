
#include <stdio.h>
#include <stdlib.h>

struct Node {
    int data;
    struct Node* next;
};

// Function to insert an element at the beginning of the linked list
struct Node* insertAtBeginning(struct Node* head, int data) {
    struct Node* newNode = (struct Node*)malloc(sizeof(struct Node));
    newNode->data = data;
    newNode->next = head;
    return newNode;
}

// Function to insert an element at a given index of the linked list
struct Node* insertAtIndex(struct Node* head, int data, int index) {
    // Implementation goes here (as provided in the previous response)
}

// Function to insert an element at the last location of the linked list
struct Node* insertAtLast(struct Node* head, int data) {
    // Implementation goes here (as provided in the previous response)
}

// Function to delete an element from the beginning of the linked list
struct Node* deleteFromBeginning(struct Node* head) {
    // Implementation goes here (as provided in the previous response)
}

// Function to delete an element from a particular position in the linked list
struct Node* deleteFromPosition(struct Node* head, int position) {
    // Implementation goes here (as provided in the previous response)
}

// Function to delete an element from the last location of the linked list
struct Node* deleteFromLast(struct Node* head) {
    // Implementation goes here (as provided in the previous response)
}

// Function to display the elements of the linked list
void display(struct Node* head) {
    struct Node* current = head;
    while (current != NULL) {
        printf("%d -> ", current->data);
        current = current->next;
    }
    printf("NULL\n");
}

int main() {
    struct Node* head = NULL;
    int choice, data, index, position;

    do {
        // Display menu
        printf("\nMenu:\n");
        printf("1. Insert at Beginning\n");
        printf("2. Insert at Given Index\n");
        printf("3. Insert at Last\n");
        printf("4. Delete from Beginning\n");
        printf("5. Delete from Given Position\n");
        printf("6. Delete from Last\n");
        printf("7. Display\n");
        printf("8. Exit\n");
        printf("Enter your choice: ");
        scanf("%d", &choice);

        switch (choice) {
            case 1:
                // Insert at Beginning
                printf("Enter the element to insert: ");
                scanf("%d", &data);
                head = insertAtBeginning(head, data);
                break;
            case 2:
                // Insert at Given Index
                printf("Enter the element to insert: ");
                scanf("%d", &data);
                printf("Enter the index: ");
                scanf("%d", &index);
                head = insertAtIndex(head, data, index);
                break;
            case 3:
                // Insert at Last
                printf("Enter the element to insert: ");
                scanf("%d", &data);
                head = insertAtLast(head, data);
                break;
            case 4:
                // Delete from Beginning
                head = deleteFromBeginning(head);
                break;
            case 5:
                // Delete from Given Position
                printf("Enter the position to delete: ");
                scanf("%d", &position);
                head = deleteFromPosition(head, position);
                break;
            case 6:
                // Delete from Last
                head = deleteFromLast(head);
                break;
            case 7:
                // Display
                display(head);
                break;
            case 8:
                // Exit
                printf("Exiting the program.\n");
                break;
            default:
                printf("Invalid choice. Please enter a valid option.\n");
        }
    } while (choice != 8);

    // Free the memory of the linked list before exiting
    struct Node* current = head;
    while (current != NULL) {
        struct Node* temp = current;
        current = current->next;
        free(temp);
    }

    return 0;
}
