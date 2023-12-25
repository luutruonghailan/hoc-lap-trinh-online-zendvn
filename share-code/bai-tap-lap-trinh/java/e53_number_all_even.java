package baitaplaptrinh;

public class e53_number_all_even {
	public static void main(String[] args) {
		int yourNumber = 2689;
		String result  = "Yes";
		
		while (yourNumber > 0)
		{
			int digit  = yourNumber % 10;
			yourNumber = yourNumber / 10;

			if(digit % 2 != 0) {
				result  = "No";
				break;
			}
		}
		System.out.println(result);
	}
}