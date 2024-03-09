// Create a class with a method in Java, and use an object of this class to call the method.

import java.util.*;

class Test{     //Declaring class
	
	String welcome;
	
	Test (String welcome) {  //Declaring a method with an argument
		this.welcome = welcome;
	}
	
	void display() {
		System.out.println("Hello" + welcome);
	}
	public static void main (String s[]) {
		Test user1 = new Test (" Aditya ");  //Creating an object
		user1.display();
	
		Test user2 = new Test(" Sourav ");
		user2.display();	
	}
}
