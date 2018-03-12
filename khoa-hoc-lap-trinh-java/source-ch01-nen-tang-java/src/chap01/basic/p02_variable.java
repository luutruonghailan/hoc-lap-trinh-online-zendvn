package chap01.basic;

public class p02_variable {
	
	// 004 Type casting
	public static void main(String[] args) {
		int var1 	= 12;
		double var2	= 1.23;		
//		int var3	= var1 + (int)var2;		// Sự thu nhỏ (narrowwing)
//		double var4	= (double)var1 + var2;	// Sự nới rộng (widening) 
		
		int var3	= var1 + (int)var2;
		double var4	= var1 + var2;
		
		System.out.println(var3);
		System.out.println(var4);
	}
		
	// 003 Data Type
	public static void main003(String[] args) {
		int var1	= 12;
		int var2	= 200;
		boolean var3= true;
		double var4	= 123.456;	// John Smith
		String name	= "John Smith";
		
		System.out.println("var1: " + var1);
		System.out.println("var2: " + var2);
		System.out.println("var3: " + var3);
		System.out.println("var4: " + var4);
		System.out.println("name: " + name);
	}
		
	// 002 Constant
	public static void main002(String[] args) {
		final int YOUR_BIRTHDAY	= 1994;
		
		//YOUR_BIRTHDAY	= 2000;
		System.out.println(YOUR_BIRTHDAY);
	}
	
	// 001 Variable
	public static void main001(String[] args) {
		// Ghi chú trên một dòng
		/* Ghi chú trên nhiều dòng */
		
		/* Các kiểu đặt tên biến
		 * char firstname;		// normal
		 * char firstName;		// camelCase
		 * char fist_name;		// underscores
		 * char first-name;		// hyphen (deny in JAVA)
		*/
		
		// println = print + "\n"
		
		int age		= 21;
		int year 	= 2015;
		char name 	= 'n';
		
		System.out.println("age: " + age);
		
		age	= 30;
		
		System.out.println("age: " + age);
	}
}
