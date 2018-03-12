package chap01.basic;

import java.text.DecimalFormat;
import java.util.Scanner;

public class p09_atm {
	
	public static void main(String[] args) {
		
		
		DecimalFormat formatter	= new DecimalFormat("#,###");
		
		// Your's money: 450.000
		int money	= 0;
		
		final int FIVE_HUNDRED_THOUSAND	= 500000;
		final int TWO_HUNDRED_THOUSAND	= 200000;
		final int ONE_HUNDRED_THOUSAND	= 100000;
		final int FIFTY_THOUSAND		= 50000;
		final int TWEENTY_THOUSAND		= 20000;
		final int TEN_THOUSAND			= 10000;
		
		int fiveHundredThousand	= 0;
		int twoHundredThousand	= 0;
		int oneHundredThousand	= 0;
		int	fiftyThousand		= 0;
		int tweentyThousand		= 0;
		int tenThousand			= 0;
		
		Scanner sc = new Scanner(System.in);
		do {
			System.out.println("Your's money: ");
			money	= sc.nextInt();
		}while(money % 10000 != 0);
		sc.close();
		
		System.out.println("-----------------------------");
		
		// 500.000
		if(money >= FIVE_HUNDRED_THOUSAND){
			fiveHundredThousand	= money / FIVE_HUNDRED_THOUSAND;
			money				= money % FIVE_HUNDRED_THOUSAND;
			System.out.printf("Mệnh giá %s: %d %n", formatter.format(FIVE_HUNDRED_THOUSAND), fiveHundredThousand);
		}
		
		// 200.000
		if(money >= TWO_HUNDRED_THOUSAND){
			twoHundredThousand	= money / TWO_HUNDRED_THOUSAND;
			money				= money % TWO_HUNDRED_THOUSAND;
			System.out.printf("Mệnh giá %s: %d %n", formatter.format(TWO_HUNDRED_THOUSAND), twoHundredThousand);
		}
		
		// 100.000
		if(money >= ONE_HUNDRED_THOUSAND){
			oneHundredThousand	= money / ONE_HUNDRED_THOUSAND;
			money				= money % ONE_HUNDRED_THOUSAND;
			System.out.printf("Mệnh giá %s: %d %n", formatter.format(ONE_HUNDRED_THOUSAND), oneHundredThousand);
		}
		
		// 50.000
		if(money >= FIFTY_THOUSAND){
			fiftyThousand	= money / FIFTY_THOUSAND;
			money			= money % FIFTY_THOUSAND;
			System.out.printf("Mệnh giá %s: %d %n", formatter.format(FIFTY_THOUSAND), fiftyThousand);
		}
		
		// 20.000
		if(money >= TWEENTY_THOUSAND){
			tweentyThousand	= money / TWEENTY_THOUSAND;
			money			= money % TWEENTY_THOUSAND;
			System.out.printf("Mệnh giá %s: %d %n", formatter.format(TWEENTY_THOUSAND), tweentyThousand);
		}
		
		// 10.000
		if(money >= TEN_THOUSAND){
			tenThousand	= money / TEN_THOUSAND;
			money		= money % TEN_THOUSAND;
			System.out.printf("Mệnh giá %s: %d %n", formatter.format(TEN_THOUSAND), tenThousand);
		}
	}
}