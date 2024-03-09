// Define a Book class with private attributes - title, author and public getters and setters methods, invoke the public setter and getter methods from main method to access the private attributes of Book class (implementation of encapsulation)

import java.util.*;

class Book {

	private String title;
	private String author;

	Book ( String title, String author) {
		this.title = title;
		this.author = author;
	} 
	
	public void setTitle (String title){
		this.title = title;
	}

	public String getTitle() {
		return title;
	}

	public void setAuthor (String x) {
		author = x;
	}

	public String getAuthor() {
		return author;	
	}
	

	public static void main (String s[]) {
		Book object = new Book("Kafka on the Shore", "Murakami");

		System.out.println(object.getTitle() + " by " + object.getAuthor());
		object.setTitle("The Alchemist");
		object.setAuthor("Paulo Celho");
		System.out.println(object.getTitle() + " by " + object.getAuthor());
		
	}
	
}
