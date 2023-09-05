#include <stdio.h> // header and libarary

int main() //main is where everthing starts
{
    int A,B,sum; // variable declaration
    printf("Enter a number A :"); //To to print an output
    scanf("%d", &A); // To a take an input
    printf("Enter anumber B :");
    scanf("%d", &B);
    //sum = A + B; //addition
    //sum = A * B;

    //printf("Result : %d", sum); //multi line result 

    printf("Result : %d %% %d = %d", A, B, A % B); //To print "%" always type twice.
    //printf("Result : %d + %d = %d", A, B, A + B); //Can use any operator
    return 0; //return 0 is used to inform the operating system that the program has completed its task without any errors. 
  
}