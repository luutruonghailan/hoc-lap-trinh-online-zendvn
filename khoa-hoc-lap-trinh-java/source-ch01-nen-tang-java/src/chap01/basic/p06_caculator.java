package chap01.basic;

import java.util.Scanner;

public class p06_caculator {
	
	public static void main(String[] args) {
		int numberFirst;
		int numberSecond;
		int result	= 0;
		String caculate;
		
		Scanner sc	= new Scanner(System.in);
		
		// Number First
		System.out.println("Number First: ");
		numberFirst		= sc.nextInt();
		sc.nextLine();
		
		// Number Second
		System.out.println("Number Second: ");
		numberSecond	= sc.nextInt();
		sc.nextLine();
		
		// Caculate
		System.out.println("Caculate: ");
		caculate	= sc.nextLine();
		sc.close();
		
		// + - * (x) / (:) %
		switch (caculate) {
			case "+":
				result	= numberFirst + numberSecond;
				break;
			case "-":
				result	= numberFirst - numberSecond;
				break;
			case "*":
			case "x":
				result	= numberFirst * numberSecond;
				break;
			case "/":
			case ":":
				result	= numberFirst / numberSecond;
				break;
			case "%":
				result	= numberFirst % numberSecond;
				break;
	
			default:
				result	= numberFirst + numberSecond;
				caculate= "+";
				break;
		}
		
		System.out.println("--------------------------");
		System.out.printf("%d %s %d = %d", numberFirst, caculate, numberSecond, result);
		
		
		
		
	}
		
}
