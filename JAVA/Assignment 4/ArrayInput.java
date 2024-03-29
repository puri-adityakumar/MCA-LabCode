// Write a Java program to input n numbers in an array and display them.

import java.util.Scanner;

public class ArrayInputExample {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        // Get the size of the array from the user
        System.out.println("Enter the size of the array: ");
        int size = scanner.nextInt();

        // Create an array of the specified size
        int[] array = new int[size];

        // Get the elements of the array from the user
        System.out.println("Enter the elements of the array: ");
        for (int i = 0; i < size; i++) {
            array[i] = scanner.nextInt();
        }

        // Display the elements of the array
        System.out.println("The elements of the array are: ");
        for (int i = 0; i < size; i++) {
            System.out.println(array[i]);
        }
    }
}
