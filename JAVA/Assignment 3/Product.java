/*
  Create a Product class with attributes like productId, productName, and price. Implement three constructors:
  default (initializes productId to 0, productName to an empty string, and price to 0.0), parameterized (with productId and productName) setting price to 0.0, 
  and another parameterized (taking all three attributes). Create objects using each constructor and display product details.
*/

import java.util.*;

class Product {
	private int productID;
	private String productName;
	private float productPrice;

	Product() {
		this.productID = productID;
		this.productName = productName;
		this.productPrice = productPrice ;
	}

	Product(int productID, String productName) {
		this.productID = productID;
		this.productName = productName;
		this.productPrice = productPrice ;
	}

	Product(int productID, String productName, float productPrice) {
		this.productID = productID;
		this.productName = productName;
		this.productPrice = productPrice ;
	}

	void display () {
		
		System.out.println(productID + " | " + productName + " | " + productPrice);
		//System.out.print(" | " + productName);
		//System.out.print(" | " + productPrice);
	}

	public static void main (String s[]) {

		System.out.println("Product ID | Product Name | Product Price");
		Product p1 = new Product();
		p1.display();

		Product p2 = new Product(101, "Laptop");
		p2.display();

		Product p3 = new Product(102, "Cell Phone", 1299.5f);
		p3.display();
			
	}
}

