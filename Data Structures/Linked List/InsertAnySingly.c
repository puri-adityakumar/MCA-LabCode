#include <stdio.h>
#include <stdlib.h>

// Define the structure for a node in the linked list
struct Node {
    int data;
    struct Node* next;
};

// Function to create a new node
struct Node* createNode(int data) {
    struct Node* newNode = (struct Node*)malloc(sizeof(struct Node));
    newNode->data = data;
    newNode->next = NULL;
    return newNode;
}

int main() {
    struct Node* head = NULL;

    int data;
    int userInput;

    do {
        // Prompt the user for input
        printf("Enter an element to add to the linked list (-1 to stop): ");
        scanf("%d", &data);

        if (data != -1) {
            // Create a new node and insert it at the beginning of the list
            struct Node* newNode = createNode(data);
            newNode->next = head;
            head = newNode;
        }
    } while (data != -1);

    // Display the linked list
    printf("Linked List: ");
    struct Node* current = head;
    while (current != NULL) {
        printf("%d -> ", current->data);
        current = current->next;
    }
    printf("NULL\n");

    // Prompt the user for a new element and position to add to the linked list
    int dataToInsert, position;
    printf("Enter a new element to add: ");
    scanf("%d", &dataToInsert);
    printf("Enter the position to insert (0-based index): ");
    scanf("%d", &position);

    // Create a new node with the user input
    struct Node* newNode = createNode(dataToInsert);

    if (position == 0) {
        // Insert at the beginning
        newNode->next = head;
        head = newNode;
    } else {
        // Traverse to the node just before the specified position
        struct Node* current = head;
        for (int i = 0; i < position - 1 && current != NULL; i++) {
            current = current->next;
        }

        if (current != NULL) {
            // Insert the new node after the current node
            newNode->next = current->next;
            current->next = newNode;
        } else {
            printf("Invalid position. Node not inserted.\n");
        }
    }

    // Display the updated linked list
    printf("Updated Linked List: ");
    current = head;
    while (current != NULL) {
        printf("%d -> ", current->data);
        current = current->next;
    }
    printf("NULL\n");

    return 0;
}
