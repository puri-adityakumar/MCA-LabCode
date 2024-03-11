// Write a program in Java to search an element in an array


import java.util.*;

class ArraySearch {

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

    public void findKey() {
        System.out.println("Enter the key element: ");
        Scanner input = new Scanner(System.in);
        key = input.nextInt();
        
        int Index = -1; // Initialize to -1, indicating not found
        for(int i = 0; i < size; i++) {
            if (array[i] == key) {
                Index = i;
                break; // Exit the loop once key is found
            }
        }
        
        if (Index != -1) {
            System.out.println("Key element found at index: " + Index);
        } else {
            System.out.println("Key element not found");
        }
    }
    
    public static void main(String[] args) {
        ArraySearch run = new ArraySearch();

        run.insertSize();
        run.insertElement();
        run.findKey();
    }
}
