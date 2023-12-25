package baitaplaptrinh;

public class e31_devide_13 {
	public static void main(String[] args) {
		int start 	  = 1;
		int end 	  = 30;
		String result = "";

		for (int i = start; i < end; i++) {
			if (i % 13 == 0) result += i + " ";
		}

		if(result.length() == 0) result = "Không có";
		System.out.println(result);
	}
}