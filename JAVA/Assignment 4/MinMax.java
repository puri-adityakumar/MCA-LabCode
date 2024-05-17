// Write a Java program to find the maximum and minimum of n number of elements of an array.
import java.util.Scanner;

    
public class MinMax {
   
    private int[] arr;  

    public void insertArray() {
        Scanner input = new Scanner(System.in);
        System.out.println("Enter the elements of the array");
        for (int i = 0; i < arr.length; i++) {
            arr[i] = input.nextInt();
            }
    } 
    
    public void findMinMax(int[] arr) {
        int min = arr[0];
        int max = arr[0];
        for (int i = 0; i < arr.length; i++) {
            if (arr[i] < min) {
                min = arr[i];
            }
            if (arr[i] > max) {
                max = arr[i];
            }
        }
        System.out.println("The minimum element of the array is " + min);
        System.out.println("The maximum element of the array is " + max);
    }

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.println("Enter the number of elements: ");
        int n = input.nextInt();
        int[] arr = new int[n];
        MinMax obj = new MinMax();

        obj.arr = arr;
        obj.insertArray();
        obj.findMinMax(arr);
        

    }
}



/* 

######### EASY WAY ##########

import java.util.Scanner;
public class MinMax {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter the size of the array : ");
        int n = sc.nextInt();
        int arr[] = new int[n];
	    System.out.print("Enter the elements of the array: ");
        for (int i = 0; i < arr.length; i++) {
            arr[i] = sc.nextInt();
        }
        int min = arr[0];
        int max = arr[0];
        for (int i = 0; i < arr.length; i++) {
            if(arr[i]<min) min = arr[i];
            if(arr[i]>max) max = arr[i];
        }
        System.out.println("Minimum is "+min+"\nMaximum is "+max);
        sc.close();
    }
}


*/