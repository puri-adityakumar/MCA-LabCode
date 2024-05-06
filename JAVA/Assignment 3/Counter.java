/*  Create a class called Counter with a static data member count and a static method incrementCounter. 
    Implement a parameterized constructor that increments the count every time an object is created. 
    Create objects of the class and display the final count.
*/
import java.util.*;

public class Counter {

    static int count = 0;

    Counter() {
        count++;
    }
    public static int getCount() {
        return count;
    }

    public static void incrementCounter() {
        count++;
    }

    public static void main(String[] args) {
        Counter c1 = new Counter();
        Counter c2 = new Counter();
        Counter c3 = new Counter();

        System.out.println("The final count is " + Counter.getCount());
    }

    
}
