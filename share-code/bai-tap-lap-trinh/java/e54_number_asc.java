package baitaplaptrinh;

public class e54_number_asc {
	public static void main(String[] args) {
		int yourNumber = 21;
		String result  = "Yes";

		
		int rightDigit =  yourNumber % 10;
		yourNumber = yourNumber / 10;

		while (yourNumber > 0)
		{
			int currentDigit  = yourNumber % 10;
			yourNumber = yourNumber / 10;

			if(currentDigit >= rightDigit ) {
				result  = "No";
				break;
			}

			rightDigit = currentDigit;
		}
		System.out.println(result);
	}
}