package chap01.basic;

import java.util.Scanner;


public class p07_find {
	
	public static void main(String[] args) {
		// Secret Number
		final int MAX_NUMBER	= 100;
		final int MIN_NUMBER	= 1;
		int range	= (MAX_NUMBER - MIN_NUMBER) + 1;
		int secretNumber = (int)(Math.random() * range) + MIN_NUMBER; 
		
		Scanner sc	= new Scanner(System.in);
		
		int yourNumber	= 0;
		int score		= 0;
		while(secretNumber != yourNumber){
			System.out.println("Your's Number (1-100):");
			yourNumber	= sc.nextInt();
			sc.nextLine();
			
			if(yourNumber > secretNumber) {
				System.out.println("Số bạn nhập > số bí mật");
			}else if (yourNumber < secretNumber) {
				System.out.println("Số bạn nhập < số bí mật");
			}else{
				System.out.println("Successfull");
			}
			score++;
		}
		sc.close();
		
		System.out.println("Score: " +score);
	}
}














