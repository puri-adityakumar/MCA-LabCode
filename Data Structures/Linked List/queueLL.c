#include <stdio.h>
#include <stdlib.h>

// Node structure for a queue
struct Node {
    int data;
    struct Node* next;
};

// Structure for a queue
struct Queue {
    struct Node* front;
    struct Node* rear;
};

// Function to enqueue an element into the queue
void enqueue(struct Queue* queue, int data) {
    struct Node* newNode = (struct Node*)malloc(sizeof(struct Node));
    if (!newNode) {
        printf("Memory allocation failed\n");
        exit(EXIT_FAILURE);
    }

    newNode->data = data;
    newNode->next = NULL;

    if (queue->rear == NULL) {
        queue->front = newNode;
        queue->rear = newNode;
    } else {
        queue->rear->next = newNode;
        queue->rear = newNode;
    }
}

// Function to dequeue an element from the queue
int dequeue(struct Queue* queue) {
    if (queue->front == NULL) {
        printf("Queue is empty. Cannot dequeue.\n");
        exit(EXIT_FAILURE);
    }

    struct Node* temp = queue->front;
    int dequeuedData = temp->data;

    queue->front = temp->next;
    free(temp);

    // If the queue becomes empty, update rear to NULL
    if (queue->front == NULL) {
        queue->rear = NULL;
    }

    return dequeuedData;
}

// Function to check if the queue is empty
int isEmpty(struct Queue* queue) {
    return queue->front == NULL;
}

// Function to display the elements of the queue
void display(struct Queue* queue) {
    if (isEmpty(queue)) {
        printf("Queue is empty.\n");
        return;
    }

    struct Node* current = queue->front;
    printf("Queue: ");
    while (current != NULL) {
        printf("%d ", current->data);
        current = current->next;
    }
    printf("\n");
}

int main() {
    struct Queue queue = {NULL, NULL};

    // Enqueue elements into the queue
    enqueue(&queue, 10);
    enqueue(&queue, 20);
    enqueue(&queue, 30);

    // Display the queue
    display(&queue);

    // Dequeue an element
    int dequeuedElement = dequeue(&queue);
    printf("Dequeued element: %d\n", dequeuedElement);

    // Display the queue after dequeue
    display(&queue);

    return 0;
}
