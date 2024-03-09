import java.util.*;

class Average {
	public static void main(String s[]) {
	   
	  Double radius, area, perimeter;
	  Scanner input = new Scanner(System.in);

	  System.out.println("Enter the radius of the circle");
	  radius = input.nextDouble();

	  area = 3.14 * radius * radius;
	  perimeter = 2 * 3.14 * radius;

	  System.out.println( "Area : " + area + " | " + "Perimeter : " + perimeter );
	}
	   
}