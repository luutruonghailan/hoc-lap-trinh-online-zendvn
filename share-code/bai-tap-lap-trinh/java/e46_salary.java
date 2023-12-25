package baitaplaptrinh;

public class e46_salary {
	public static void main(String[] args) {
		int result = 0;
		final int SALARY_ONE_HOUR 			= 20;
		final int PRICE_REVIEW_LEVEL_ONE 	= 1;
		final int PRICE_REVIEW_LEVEL_TWO 	= 2;
		final int PRICE_REVIEW_LEVEL_THREE 	= 5;
		int priceReview = PRICE_REVIEW_LEVEL_THREE;

		int totalLine = 10;
		int timeDoing = 3;

		if(totalLine < 10){
			priceReview = PRICE_REVIEW_LEVEL_ONE;
		}else if(totalLine >= 10 && totalLine < 20){
			priceReview = PRICE_REVIEW_LEVEL_TWO;
		}

		result = timeDoing * SALARY_ONE_HOUR - priceReview;
		System.out.println("Salary: " + result + "$");
	}
}