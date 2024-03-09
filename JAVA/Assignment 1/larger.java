import java.util.*;

class larger {
	public static void main (String s[]) {
		Double num1, num2;
		Scanner input = new Scanner(System.in);

		num1 = Double.parseDouble(s[0]);
		num2 = Double.parseDouble(s[1]);

		if (num1 > num2 ){
			System.out.println(num1 + " is greater than " + num2);
			}
		else 
			System.out.println(num2 + " is greater than " + num1); 
	}
}