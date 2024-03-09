import java.util.*;

class SumAverage {
	public static void main (String args[]) {
		int a, i, sum = 0, n;
		Scanner input = new Scanner(System.in);

		System.out.println("Enter a value for n : ");
		n = input.nextInt();
		System.out.print("Enter the numbers : ");

		for(i = 0; i <= n-1; i++) {
			a = input.nextInt();
			sum += a;
		}
		System.out.println("The sum is " + sum);
		System.out.println("The avg is " + sum/n);		
	}
}