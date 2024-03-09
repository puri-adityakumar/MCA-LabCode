
/* 
  Create a class called Counter with a static data member count and a static method incrementCounter. 
  Implement a parameterized constructor that increments the count every time an object is created. Create objects of the class and display the final count.
*/


class Counter {
  private static int  count = 0;
  static void incrementCounter() {
    count++;
  }
  
  Counter() {
    incrementCounter();
  }
  
  static int getCount() {
    return count;
  } 
  
  public static void main(String s[]) {
    
    Counter obj1 = new Counter();
    Counter obj2 = new Counter();
    Counter obj3 = new Counter();
    
    System.out.println("Final Count: " + getCount());
  }
}
class Counter ()
