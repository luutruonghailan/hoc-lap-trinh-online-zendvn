package chap01.basic;

public class p03_operator {
	
	// 008 RANDOM NUMBER
	public static void main(String[] args) {
		int max		= 104;
		int min		= 100;	// 14 15 16 17 18 19
		int range	= (max - min) + 1;
		int randomNumber = 0;
		
		randomNumber	= (int)(Math.random() * range) + min; 
		System.out.println("random: " + randomNumber);
	}
		
	// 007 MAX
	public static void main007(String[] args) {
		int numberOne		= 255;
		int numberTwo		= 125;
		int numberThree		= 185;	

		int maxNumber		= Math.max(Math.max(numberOne, numberTwo), numberThree);
		System.out.println("Max: " + maxNumber);
	}
		
	// 006 Hàm toán học phổ biến
	public static void main006(String[] args) {
		int numberOne		= 15;
		int numberTwo		= 125;
		double numberThree	= 123.145;	// 123 124

		int maxNumber		= Math.max(numberOne, numberTwo);
		System.out.println("Max: " + maxNumber);
		
		int minNumber		= Math.min(numberOne, numberTwo);
		System.out.println("Min: " + minNumber);
		
		System.out.println("ceil: " + Math.ceil(numberThree));
		System.out.println("floor: " + Math.floor(numberThree));
		System.out.println("round: " + Math.round(numberThree));
		
		double randomNumber	= Math.random();
		System.out.println("randomNumber: " + randomNumber);
	}
		
	// 005 Toán tử logic && || !
	public static void main005(String[] args) {
		int numberOne	= 20;
		int numberTwo	= 10;
		boolean result	= false;

		// && true tất cả biểu thức true
		// && false chỉ cần 1 biểu thức false
		result	= (numberOne > numberTwo) && (numberOne >= numberTwo) && (3<1);
		System.out.println("(numberOne > numberTwo) && (numberOne >= numberTwo is " + result);

		// || true chỉ cần 1 biểu thức true
		// || false tất cả biểu thức false
		result	= (3<2) || (5 <= 3) || (1<0);
		
		System.out.println("(numberOne > numberTwo) && (numberOne >= numberTwo is " + result);

		// true
		result	= !(3>2 && 5>8);
		System.out.println("!(numberOne > numberTwo) " + result);
	}
	
	// 004 Toán tử so sánh > < >= <= == != 
	public static void main004(String[] args) {
		int numberOne		= 3;
		int numberTwo		= 5;
		boolean result	= false;

		result	= numberOne > numberTwo;
		System.out.println(numberOne + " > " + numberTwo + " is " + result);

		result	= numberOne >= numberTwo;
		System.out.println(numberOne + " >= " + numberTwo + " is " + result);
		
		result	= numberOne < numberTwo;
		System.out.println(numberOne + " < " + numberTwo + " is " + result);

		result	= numberOne <= numberTwo;
		System.out.println(numberOne + " <= " + numberTwo + " is " + result);
		
		result	= (numberOne == numberTwo);
		System.out.println(numberOne + " == " + numberTwo + " is " + result);

		result	= (numberOne != numberTwo);
		System.out.println(numberOne + " != " + numberTwo + " is " + result);

	}
		
	// 003 Toán tử ++ --
	public static void main003(String[] args) {
		/*
		 * numberStart++ trả về giá trị của numberStart, sau đó tăng number lên một đơn vị
		 * numberStart-- trả về giá trị của numberStart, sau đó giảm number xuống một đơn vị
		 * ++numberStart tăng numberStart lên một đơn vị, sau đó trả về giá trị của numberStart
		 * --numberStart giảm numberStart xuống một đơn vị, sau đó trả về giá trị của numberStart
		 */
		int numberStart	= 20;
		int numberEnd	= 0;
		
		numberEnd		= ++numberStart;
		numberEnd		= --numberStart;
		System.out.println("Number Start = " + numberStart);
		System.out.println("Number End   = " + numberEnd);
	}
		
	// 002 Toán tử gán += -= *= /= %=
	public static void main002(String[] args) {

		int number	= 20;
		System.out.println("Start = " + number);
		
		number += 10;	// number	= number + 10;
		number -= 10;	// number	= number - 10
		number *= 10;	// number	= number * 10
		number /= 10;	// number	= number / 10
		number %= 10;	// number	= number % 10
		System.out.println("End = " + number);
	}
		
	// 001 Toán tử số học  + - * / %
	public static void main001(String[] args) {
		int numberOne	= 20;
		int numberTwo	= 3;
		int result;

		// +
		result	= numberOne + numberTwo;
		System.out.println(numberOne + " + " + numberTwo + " = " + result);

		// -
		result	= numberOne - numberTwo;
		System.out.println(numberOne + " - " + numberTwo + " = " + result);

		// *
		result	= numberOne * numberTwo;
		System.out.println(numberOne + " * " + numberTwo + " = " + result);

		// /
		// 10 / 4 = 2 dư 2
		result	= numberOne / numberTwo;
		System.out.println(numberOne + " / " + numberTwo + " = " + result);


		// %
		result	= numberOne % numberTwo;
		System.out.println(numberOne + " % " + numberTwo + " = " + result);
	}
		
}
