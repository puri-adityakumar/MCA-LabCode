/*
  Create a class called Calculator with static methods for basic arithmetic operations (add, subtract, multiply, divide). Implement these methods to perform the respective operations on two numbers. Demonstrate the usage of these methods in the main method.
*/

import java.util.*;

public class Calculator {
    public static int add(int a, int b) {
        return a + b;
    }

    public static int subtract(int a, int b) {
        return a - b;
    }

    public static int multiply(int a, int b) {
        return a * b;
    }

    public static double divide(int a, int b) {
        if (b == 0) {
            throw new IllegalArgumentException("Division by zero is not allowed.");
        }
        return (double) a / b;
    }
}

public class Main {
    public static void main(String[] args) {
        int a = 10;
        int b = 5;

        // Add
        int sum = Calculator.add(a, b);
        System.out.println("Sum: " + sum);

        // Subtract
        int difference = Calculator.subtract(a, b);
        System.out.println("Difference: " + difference);

        // Multiply
        int product = Calculator.multiply(a, b);
        System.out.println("Product: " + product);

        // Divide
        double quotient = Calculator.divide(a, b);
        System.out.println("Quotient: " + quotient);
    }
}
