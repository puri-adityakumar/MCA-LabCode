// Write a program in Java to sort elements of a given array.

import java.util.*;

class ArraySort {

    int size;
    int[] array;
    int key;

    public void insertSize() {
        Scanner input = new Scanner(System.in);
        System.out.println("Enter the size of the array: ");
        size = input.nextInt();
        array = new int[size];
    }

    public void insertElement() {
        Scanner input = new Scanner(System.in);
        System.out.println("Enter the elements of the array:");
        for (int i = 0; i < size; i++) {
            array[i] = input.nextInt();
        }

        System.out.println("The elements of the array are: ");
        for (int i = 0; i < size; i++) {
            System.out.println(array[i]);
        }
    }

    public void sort() {
       for (int i = 0; i < size - 1; i++) {
           for(int j = 0; j < size - i - 1; j++) {
               if (array[j] > array[j + 1]) {
                   int temp = array[j];
                   array[j] = array[j + 1];
                   array[j + 1] = temp; 
               }
           }
       }
       
        System.out.println("Array after sorting: ");
        for (int i = 0; i < size; i++) {
            System.out.println(array[i]);
        }
    }
    
    public static void main(String[] args) {
        ArraySort run = new ArraySort();

        run.insertSize();
        run.insertElement();
        run.sort();
    }
}
