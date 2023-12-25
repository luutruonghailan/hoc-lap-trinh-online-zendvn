package baitaplaptrinh;

public class e28_commission {
	public static void main(String[] args) {
		int totalSales = 90; 
		final double BONUS_LEVEL_ONE 	= 0.05;
		final double BONUS_LEVEL_TWO 	= 0.1;
		final double BONUS_LEVEL_THREE 	= 0.2;
		double incentive = BONUS_LEVEL_THREE;

		if (totalSales <= 100) {
			incentive = BONUS_LEVEL_ONE;
		} else if (totalSales <= 300) {
			incentive =  BONUS_LEVEL_TWO;
		} 

		double commission = totalSales * incentive;

		System.out.println("Hoa hồng: " + commission);
	}
}