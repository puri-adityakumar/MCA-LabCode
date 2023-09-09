//The problem of this code id to find the prime numbers for given range, however instead of provided code I have used my own which is less lines of codes.
#include <stdio.h>

int main(void)
{
    int i,n,j,a,count; //declartion
    printf("Minimum: ");
    scanf("%d", &a);
    printf("Maximum: ");
    scanf("%d", &n);

    for(j=a; j<=n; j++) // for loop initiated with the input value "a", condition should be less or equal to "n", incrementing 1 value.
    {
        count=0; // assigned value 0
        for(i=1;i<=j;i++)
        {
            if(j % i == 0)
            count = count + 1;
        }

        if(count==2){
            printf("%d\n",j);
        }


    }

}
