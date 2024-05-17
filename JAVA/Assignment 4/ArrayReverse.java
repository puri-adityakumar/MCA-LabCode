// Write a program in Java to reverse an array.
import java.util.Arrays;
import java.util.Scanner;

public class ArrayReverse {
    
    
   
    static void reverse(int[] arr) {
        int start = 0;
        int end = arr.length - 1;
        while (start < end) {
            int temp = arr[start];
            arr[start] = arr[end];
            arr[end] = temp;
            start++;
            end--;
        }
    }
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.println("Enter the size of the array: ");
        int size = input.nextInt();
        ArrayDisplay obj = new ArrayDisplay(size);
        obj.insertArray();
        obj.display();

        int[] arr = obj.arr;
        System.out.println("Reversed array is: ");
        for (int i = 0; i < arr.length; i++) {
            System.out.println(arr[i] + " ");
        }
        System.out.println();
        
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


import java.util.Arrays;
import java.util.Scanner;

public class ReverseArr {
    static int[] reverse(int b[]){
        int rev[] = new int[b.length];
        for (int i = 0; i < b.length; i++) {
            rev[i] = b[b.length - i -1];
        }
        return rev;
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
        int rev[] = ReverseArr.reverse(arr);
        System.out.println("The array is:" + Arrays.toString(arr));
        System.out.println("The reverse array is:" + Arrays.toString(rev));
        sc.close();
    }
}






*/