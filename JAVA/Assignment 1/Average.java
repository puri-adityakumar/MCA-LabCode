import java.util.*;

class Average {
	public static void main (String s[]) {
		Double num1, num2, num3;
		Scanner input = new Scanner(System.in);

		System.out.println("Enter three number : ");
		num1 = input.nextDouble();
		num2 = input.nextDouble();
		num3 = input.nextDouble();

		Double avg = ( num1 + num2 + num3 ) / 3;
		System.out.println("Average : " + avg);

	}

}