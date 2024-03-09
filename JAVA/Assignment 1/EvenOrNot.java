import java.util.*;

class EvenOrNot {
	public static void main (String s[]) {
		int anyNum;
		Scanner input = new Scanner(System.in);
 		
		System.out.println("Enter any number : ");
		anyNum = input.nextInt();

		if (anyNum % 2 == 0) {
				System.out.println("It's a even number");
			 }
		else
		    System.out.println("Not a Even numebr");
	}
}