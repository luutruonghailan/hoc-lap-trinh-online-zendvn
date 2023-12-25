package baitaplaptrinh;

public class e52_digit_sum {
	public static void main(String[] args) {
		int yourNumber = 127;
		int result     = 0;
		
		while (yourNumber > 0)
		{
			int digit  = yourNumber % 10;
			yourNumber = yourNumber / 10;
			result += digit;
		}
		System.out.println(result);
	}
}