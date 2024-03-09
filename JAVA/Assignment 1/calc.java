import java.util.*;

class calc {
	public static void main (String s[]){
		
			Double number1, number2, result;
			char operator;
			Scanner scan = new Scanner(System.in);
			
			System.out.println("Enter the first number");
			number1 = scan.nextDouble();

			System.out.println("Choosen a operator: +, -, /, *, % ");
			operator = scan.next().charAt(0);

			System.out.println("Enter the second number");
			number2 = scan.nextDouble();

			switch(operator) {
			
				case '+':
					result = number1 + number2;
					System.out.println( "result :" + result );
					break;

				case '-':
					result = number1 - number2;
					System.out.println( "result :" + result );
					break;

				case '*':
					result = number1 * number2;
					System.out.println( "result :" + result );
					break;

				case '/':
					result = number1 / number2;
					System.out.println( "result :" + result );
					break;

				case '%':
					result = number1 % number2;
					System.out.println( "result :" + result );
					break;
				default:
					System.out.println("Invalid Operator");

				 
			}
		}
	}