#include <stdio.h>
#include <stdlib.h>

// Node structure for a stack
struct Node {
    int data;
    struct Node* next;
};

// Function to push an element onto the stack
void push(struct Node** top, int data) {
    struct Node* newNode = (struct Node*)malloc(sizeof(struct Node));
    if (!newNode) {
        printf("Memory allocation failed\n");
        exit(EXIT_FAILURE);
    }

    newNode->data = data;
    newNode->next = *top;
    *top = newNode;
}

// Function to pop an element from the stack
int pop(struct Node** top) {
    if (*top == NULL) {
        printf("Stack is empty. Cannot pop.\n");
        exit(EXIT_FAILURE);
    }

    struct Node* temp = *top;
    int poppedData = temp->data;
    *top = temp->next;
    free(temp);

    return poppedData;
}

// Function to check if the stack is empty
int isEmpty(struct Node* top) {
    return top == NULL;
}

// Function to display the elements of the stack
void display(struct Node* top) {
    if (isEmpty(top)) {
        printf("Stack is empty.\n");
        return;
    }

    struct Node* current = top;
    printf("Stack: ");
    while (current != NULL) {
        printf("%d ", current->data);
        current = current->next;
    }
    printf("\n");
}

int main() {
    struct Node* top = NULL;

    // Push elements onto the stack
    push(&top, 10);
    push(&top, 20);
    push(&top, 30);

    // Display the stack
    display(top);

    // Pop an element
    int poppedElement = pop(&top);
    printf("Popped element: %d\n", poppedElement);

    // Display the stack after popping
    display(top);

    return 0;
}
