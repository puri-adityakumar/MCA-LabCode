// Write a Java program to calculate the sum and average of n number of elements of an array.

import java.util.Arrays;
import java.util.Scanner;

public class ArraySum {

    static int sumArr (int arr[]) {
        int sum = 0;
        for (int i = 0; i < arr.length; i++) {
            sum = sum + arr[i];
        }
        return sum;
    }

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.println("Enter the size of the array: ");
        int size = input.nextInt();
        ArrayDisplay obj = new ArrayDisplay(size);
        obj.insertArray();
        obj.display();

        int sum = sumArr(obj.arr);
        double average = (double) sum / obj.arr.length;

        System.out.println("Sum : " + sum);
        System.out.println("Average : " + average);

        
        
    }
    
}



class ArrayDisplay{


    public int[] arr;
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

}


/* 

######### EASY WAY ##########

import java.util.Scanner;
class SumAverage{
    static int sum(int arr[]){
        int s = 0;
        for (int i = 0; i < arr.length; i++) {
            s += arr[i];
        }
        return s;
    }
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter the size of the array : ");
        int n = sc.nextInt();
        int arr[] = new int[n];
	    System.out.print("Enter the elements of the array: ");
        for (int i = 0; i < arr.length; i++) {
            arr[i] = sc.nextInt();
        }
        int s = SumAverage.sum(arr);
        double avg = (double) s / (double) n;
        System.out.println("The sum is " + s + "\nThe average is " + avg);
        sc.close();
    }
}


*/