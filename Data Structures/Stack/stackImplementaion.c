#include <stdio.h>
#include <stdbool.h>

#define MAX_SIZE 6

int stack[MAX_SIZE]; // Define an array to implement the stack.
int top = -1; // Initialize the top of the stack to -1 (empty).

void push(int data) {
    // Push operation: Add an element to the top of the stack.
    if (top < MAX_SIZE - 1) {
        stack[++top] = data; // Increment top and store data in the stack.
        printf("%d pushed onto the stack.\n", data); // Print a message.
    } else {
        printf("Stack is full. Cannot push %d onto the stack.\n");
    }
}

int pop() {
    // Pop operation: Remove and return the top element from the stack.
    if (top >= 0) {
        int data = stack[top--]; // Retrieve data and decrement top.
        printf("%d popped from the stack.\n", data); // Print a message.
        return data;
    } else {
        printf("Stack is empty. Cannot pop.\n");
        return -1; // Return a sentinel value indicating failure.
    }
}

int peek() {
    // Peek operation: Return the top element without removing it.
    if (top >= 0) {
        int data = stack[top]; // Retrieve data.
        printf("Top element of the stack: %d\n", data); // Print a message.
        return data;
    } else {
        printf("Stack is empty. No element to peek.\n");
        return -1; // Return a sentinel value indicating failure.
    }
}

bool isFull() {
    // Check if the stack is full (reached its maximum capacity).
    return top == MAX_SIZE - 1;
}

bool isEmpty() {
    // Check if the stack is empty (no elements).
    return top == -1;
}

void printStack() {
    // Display the elements in the stack.
    printf("Stack elements: ");
    for (int i = 0; i <= top; i++) {
        printf("%d ", stack[i]);
    }
    printf("\n");
}

int main() {
    int choice, data;
    bool exitMenu = false;

    while (!exitMenu) {
        printf("\nStack Operations Menu:\n");
        printf("1. Push\n");
        printf("2. Pop\n");
        printf("3. Peek\n");
        printf("4. Check if Stack is Full\n");
        printf("5. Check if Stack is Empty\n");
        printf("6. Print Stack\n");
        printf("7. Exit\n");
        printf("Enter your choice: ");
        scanf("%d", &choice);

        switch (choice) {
            case 1:
                printf("Enter data to push onto the stack: ");
                scanf("%d", &data);
                push(data);
                break;
            case 2:
                pop();
                break;
            case 3:
                peek();
                break;
            case 4:
                if (isFull()) {
                    printf("Stack is full.\n");
                } else {
                    printf("Stack is not full.\n");
                }
                break;
            case 5:
                if (isEmpty()) {
                    printf("Stack is empty.\n");
                } else {
                    printf("Stack is not empty.\n");
                }
                break;
            case 6:
                printStack();
                break;
            case 7:
                exitMenu = true;
                break;
            default:
                printf("Invalid choice. Please enter a valid option.\n");
        }
    }

    return 0;
}


/* 

    EXPLANATION:

Pseudo-code explanation:

1. We start by defining an array to implement the stack and initializing the top of the stack to -1, indicating an empty stack.
2. The **`push`** function adds an element to the top of the stack if there's room. It increments the top index and stores the data. A message is printed indicating the operation result.
3. The **`pop`** function removes and returns the top element if the stack is not empty. It retrieves the data, decrements the top index, and prints a message.
4. The **`peek`** function returns the top element without removing it if the stack is not empty. It retrieves the data and prints a message.
5. The **`isFull`** and **`isEmpty`** functions check whether the stack is full or empty and return a Boolean result.
6. The **`printStack`** function displays the elements in the stack.
7. In the **`main`** function, a menu is displayed to allow the user to choose from various stack operations. The user's choice is processed using a **`switch`** statement, and the selected operation is performed.
8. The program continues to run until the user chooses to exit.


*/
