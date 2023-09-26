// Write a program to delete an element from array at any postion

#include <stdio.h>

int main()
{
    int a[100],n,i,pos;

    printf("Length of the array : ");
    scanf("%d",&n);

    printf("Enter the elements for the array : ");
    for(i=0;i<n;i++){
        scanf("%d", &a[i]);
    }

    printf("Enter the postion which value you want to delete : ");
    scanf("%d", &pos);

    if(pos-1>=n){
        printf("Invalid Postion");
    }
    else{
        //Delete element at any postion logic
        printf("Updated array: \n");
        for(i=pos-1;i<n;i++){
            a[i]=a[i+1];
        }

        for(i=0;i<n-1;i++){
            printf("%d",a[i]);
        }
    }
    return 0;
}
