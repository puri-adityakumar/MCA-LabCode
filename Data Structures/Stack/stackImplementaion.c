#include <stdio.h>
#include <stdbool.h>

#define MAX_SIZE 6

int stack[MAX_SIZE];
int top = -1;

void push(int data) {
    if (top < MAX_SIZE - 1) {
        stack[++top] = data;
        printf("%d pushed onto the stack.\n", data);
    } else {
        printf("Stack is full. Cannot push %d onto the stack.\n", data);
    }
}

int pop() {
    if (top >= 0) {
        int data = stack[top--];
        printf("%d popped from the stack.\n", data);
        return data;
    } else {
        printf("Stack is empty. Cannot pop.\n");
        return -1;
    }
}

int peek() {
    if (top >= 0) {
        int data = stack[top];
        printf("Top element of the stack: %d\n", data);
        return data;
    } else {
        printf("Stack is empty. No element to peek.\n");
        return -1;
    }
}

bool isFull() {
    return top == MAX_SIZE - 1;
}

bool isEmpty() {
    return top == -1;
}

void printStack() {
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
