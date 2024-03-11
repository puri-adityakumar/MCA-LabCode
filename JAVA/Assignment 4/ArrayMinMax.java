// Write a Java program to calculate the sum and average of n number of elements of an array.
import java.util.*;

class ArraySum {

    int size;
    int[] array;


    ArraySum() {
        System.out.println("Hello World!");
    }

    public void insertSize () {
        Scanner input = new Scanner(System.in);
        System.out.println("Enter the size of the array: ");
        size = input.nextInt();
        array = new int[size];
    }

    public void insertElement () {
        Scanner input = new Scanner(System.in);
        System.out.println("The elements of the array are:");
        for (int i = 0; i < size; i++) {
            array[i] = input.nextInt();
        }

        System.out.println("The elements of the array are: ");
        for (int i = 0; i < size; i++) {
            System.out.println(array[i]);
        }
    }

    public void minMax() {
        int min = array[0];
        int max = array[0];

        for(int i = 0; i < size; i++ ) {
            if (array[i] < min) {
                min = array[i];
            }
            if (array[i] > max) {
                max = array[i];
            }
        }

        System.out.println("The minimum is " + min);
		System.out.println("The maximum is " + max);	

    }
    public static void main(String[] args) {
        ArraySum run = new ArraySum();

        run.insertSize();
        run.insertElement();
        run.minMax();

    }


}
