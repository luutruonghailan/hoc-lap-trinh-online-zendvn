package baitaplaptrinh;

public class e30_list_even_number {
	public static void main(String[] args) {
		int start 		= 4;
		int end 		= 9;
		String result 	= "";

		for (int i = start + 1; i < end; i++) {
			if (i % 2 == 0) result += i + " ";
		}

		if(result.length() == 0) result = "Không có";

		System.out.println(result);
	}
}