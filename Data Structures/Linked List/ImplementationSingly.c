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

    // Clean up and free memory (Optional)
    while (head != NULL) {
        struct Node* temp = head;
        head = head->next;
        free(temp);
    }

    return 0;
}
