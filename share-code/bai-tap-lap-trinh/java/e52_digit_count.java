package baitaplaptrinh;

public class e52_digit_count {
	public static void main(String[] args) {
		int yourNumber = 127;
		int result     = 0;

		// C1
		// System.out.println((yourNumber+"").length());
		
		// C2
		while (yourNumber > 0)
		{
			yourNumber    = yourNumber / 10;
			result++;
		}
		System.out.println(result);
	}
}