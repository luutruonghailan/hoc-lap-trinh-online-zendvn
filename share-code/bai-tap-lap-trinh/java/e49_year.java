package baitaplaptrinh;

public class e49_year {
	public static void main(String[] args) {
		int year = 2000;
		String result = "Không là năm nhuận ";

		if (year % 400 == 0 || (year % 4 == 0 && year % 100 != 0)) {
			result = "Năm nhuận";
		}

		System.out.println(result);
	}
}