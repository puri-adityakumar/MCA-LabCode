// Write a Java program to input n numbers in an array and display them.

import java.util.Scanner;

class ArrayDisplay{


    private int[] arr;
    ArrayDisplay( int size) {
        this.arr = new int[size];
    }

    public void insertArray() {
        Scanner input = new Scanner(System.in);
        System.out.println("Enter the elements of the array");
        for (int i = 0; i < arr.length; i++) {
            arr[i] = input.nextInt();
            }
    }

    public void display() {
        System.out.println("The array that you have entered: ");
        for ( int i = 0; i < arr.length; i++) {
            System.out.print(arr[i] + " ");
        }
    }

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.println("Enter the size of the array: ");
        int size = input.nextInt();
        ArrayDisplay obj = new ArrayDisplay(size);
        obj.insertArray();
        obj.display();
        
    }
}




/* 

######### EASY WAY ##########

import java.util.Arrays;
import java.util.Scanner;

class ArrayDisplay {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter the size of the array : ");
        int n = sc.nextInt();
        int arr[] = new int[n];
	    System.out.print("Enter the elements of the array: ");
        for (int i = 0; i < arr.length; i++) {
            arr[i] = sc.nextInt();
        }
        System.out.println("The array is:" + Arrays.toString(arr));
        sc.close();
    }
}





*/
