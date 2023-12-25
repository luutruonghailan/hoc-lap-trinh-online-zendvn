package baitaplaptrinh;

public class e43_avg_score {
	public static void main(String[] args) {
		int scoreOne      = 6;
		int scoreTwo      = 9;
		int scoreThree    = 5;

		int maxNumber   = Math.max(Math.max(scoreOne, scoreTwo), scoreThree);
		double avg      = (double)(scoreOne + scoreTwo + scoreThree) / 3;
		System.out.println("Max " + maxNumber);
		System.out.printf("Avg: %.1f", avg);
	}
}