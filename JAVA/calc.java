// Write a Javaprogram to find the sum, multiply, substract, divide and remainder of two numbers

import java.util.Scanner;

class calc {
    public static void main(String[] args) {
        
    
        char operator;
        Double number1, number2, result;
        Scanner input = new Scanner(System.in);

        System.out.println("Enter first number: ");
        number1 = input.nextDouble();

        System.out.println("Choose an operator: +, -, *, /, %");
        operator = input.next().charAt(0);

        System.out.println("Enter second number: ");
        number2 = input.nextDouble();

        switch (operator) {

            case '+':
                result = number1 + number2;
                System.out.println(number1 + " + " + number2 + " = " + result);
                break;
            case '-':
                result = number1 - number2;
                System.out.println(number1 + " - " + number2 + " = " + result);
                break;
            case '*':
                result = number1 * number2;
                System.out.println(number1 + " * " + number2 + " = " + result);
                break;
            case '/':
                result = number1 / number2;
                System.out.println(number1 + " / " + number2 + " = " + result);
                break;
            case '%':
                result = number1 % number2;
                System.out.println(number1 + " % " + number2 + " = " + result);
                break;
            default:
                System.out.println("Invalid Operator!");
                break;
        }
        
        input.close();
       }
}
