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
    struct Node* tail = NULL;

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

            if (tail == NULL) {
                // If the list was empty, update both head and tail
                tail = newNode;
            }
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

    // Prompt the user for a new element to add at the end of the linked list
    int dataToInsert;
    printf("Enter a new element to add at the end: ");
    scanf("%d", &dataToInsert);

    // Create a new node with the user input
    struct Node* newNode = createNode(dataToInsert);

    if (tail == NULL) {
        // If the list was empty, update both head and tail
        head = newNode;
        tail = newNode;
    } else {
        tail->next = newNode;
        tail = newNode;
    }

    // Display the updated linked list
    printf("Updated Linked List: ");
    current = head;
    while (current != NULL) {
        printf("%d -> ", current->data);
        current = current->next;
    }
    printf("NULL\n");

    // Clean up and free memory
    while (head != NULL) {
        struct Node* temp = head;
        head = head->next;
        free(temp);
    }

    return 0;
}
