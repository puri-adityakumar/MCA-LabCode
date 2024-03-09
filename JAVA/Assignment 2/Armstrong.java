import java.util.*;

class Armstrong {
	public static void main (String arg[]) {
		int a, temp, digit, num = 0 ;
		Scanner input = new Scanner(System.in);
		a = input.nextInt();
		temp = a;

		while (temp !=0) {
			digit = temp % 10;
			num = num + (digit * digit * digit * digit );
			temp = temp/10;
		}
		if (num == a) {
			System.out.println("It's a Armstrong number");
		} else {
			System.out.println("It's not a Armstrong number");
		}
	}
	

}
