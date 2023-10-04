#include <stdio.h>

int main() {
    int a = 0, b = 1, c, n;
    printf("Enter the range: ");
    scanf("%d", &n);

    printf("Fibonacci Series: ");

    if (n >= 1)
        printf("%d ", a); // Print the first Fibonacci number (0)
    if (n >= 2)
        printf("%d ", b); // Print the second Fibonacci number (1)

    for (int i = 3; i <= n; i++) {
        c = a + b; // Calculate the next Fibonacci number
        printf("%d ", c); // Print the current Fibonacci number
        a = b; // Update a to the previous b
        b = c; // Update b to the current c
    }

    return 0;
}


/* 

Here's a step-by-step explanation of the code:

1. The code includes the standard input/output library (<stdio.h>).

2. It defines four integer variables: a, b, c, and n. a and b are initialized with the first two Fibonacci numbers (0 and 1).

3. The code prompts the user to enter a range (n) for generating Fibonacci numbers.

4. It prints the initial part of the Fibonacci series, which includes the first two numbers (a and b) if n is greater than or equal to 1 and 2, respectively.

5. The code then enters a loop that starts from i = 3 and continues until i reaches the specified range n.

6. Inside the loop, it calculates the next Fibonacci number c by adding a and b.

7. It prints the current Fibonacci number (c) and updates the values of a and b to prepare for the next iteration.

8. Finally, the program returns 0 to indicate successful execution.

9. The code essentially generates and prints the Fibonacci series up to the specified range n by iteratively calculating and displaying each number in the sequence.

*/



