#include <stdio.h>

void main()
{
    int arr[50],i,n;
    
    printf("Enter the number of elements: ");
    scanf("%d",&n);
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
    }
}
