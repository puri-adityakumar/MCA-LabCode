#include <stdio.h>

int main ()
{
   /*  
    int A=2,B=5,temp; //three var swapping
    printf("Currently the values of A and B are %d and %d respectively\n", A, B);
    temp = A;
    A = B;
    B = temp;
    printf("After swapping values are A = %d and B = %d", A, B);
    return 0;
 */

    int A=2,B=5; //two var swapping
    printf("Currently the values of A and B are %d and %d respectively\n", A, B);
    A = A + B;
    B = A - B;
    A = A - B;
    printf("After swapping values are A = %d and B = %d", A, B);
    return 0;

}