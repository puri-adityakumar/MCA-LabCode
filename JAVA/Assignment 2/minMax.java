import java.util.Scanner;

class minMax{
	public static void main (String s[]) {
		int a, i, min, max,n;
		Scanner input = new Scanner(System.in);
		System.out.print("Enter the no of numbers: ");
		
		n = input.nextInt();
		System.out.print("Enter the numbers: ");
		a = input.nextInt();
		min = a;
		max = a;

		for (i = 1; i < n; i++){
			a = input.nextInt();
			if (a<min) {
				min = a;
			}
			if (a>max) {
				max = a;
			}
		}
		System.out.println("The minimum is " + min);
		System.out.println("The minimum is " + max);	
	}

}