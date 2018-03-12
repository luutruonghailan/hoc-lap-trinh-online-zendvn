package chap02.oop;

public class Counter {
	public static int count	= 0;
	public static String college	= "CTU";
	public Counter(){
		count++;
	}
	
	public static int getCount(){
		return count;
	}
	
	public static void showCount(){
		System.out.println("count: " + count);
		System.out.println("college: " + college);
		System.out.println("count: " + getCount());
	}
}
