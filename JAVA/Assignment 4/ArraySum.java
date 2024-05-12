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

    public void calculateSum () {
        int sum = 0;
        for (int i = 0; i < size; i++) {
            sum += array[i];
        }
        System.out.println("The sum is :" + sum);
        System.out.println("The average is: " + sum / size);
    }

    public static void main(String[] args) {
        ArraySum run = new ArraySum();

        run.insertSize();
        run.insertElement();
        run.calculateSum();

    }


}
