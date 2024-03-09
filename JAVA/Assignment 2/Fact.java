import java.util.Scanner;

class Fact {
	public static void main ( String s[]) {
		int a,i;
		long fact = 1;
		Scanner input = new Scanner(System.in);
		System.out.println("Enter the number");

		a = input.nextInt();
		for (i=1 ; i<=a; ++i) {
			fact = fact*i;
		}
		System.out.println("Result " + fact);
	}
}