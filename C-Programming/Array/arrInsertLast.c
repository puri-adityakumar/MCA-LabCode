#include <stdio.h>

void main()
{
    int arr[50],i,n,x;
    
    printf("Enter the size of elements: ");
    scanf("%d",&n); // "n" is size of the array
    if(n >= 50)
        printf("Overflow Condition");
    else{
        printf("Enter the elements for the array:");
        for(i=0; i<n; i++){
            scanf("%d", &arr[i]);
        }
        printf("Elements in the array are as follow:\n");
     for(i=0; i<n; i++){
         printf(" %d ",arr[i]);
     }
     
     //Add a element inside the array at the beginning
     
     printf("\nEnter the element you want to add: ");
     scanf("%d", &x); // "x" is the element that is going to inserted
     arr[n] = x;
     
     printf("Updated array: \n");
     for(i=0;i<n+1;i++){
         printf(" %d ",arr[i]);
     }
     
     
    }
}
