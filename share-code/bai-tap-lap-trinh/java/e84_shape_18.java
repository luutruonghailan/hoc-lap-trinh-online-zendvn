package baitaplaptrinh;

public class e84_shape_18 {
	
	public static void main(String[] args) {
		// 	   1		0
		//    2 2		1
		//   3   3		3
		//  4     4		5
		// 5       5	7
		int height 		= 9;
		String shape 	= " ".repeat(height-1) + 1 + "\n";
		String record 	= "";

		for (int i = 2; i <= height; i++) {
			String space 	= " ".repeat(height-i);
			String number 	= i + " ".repeat(2*i - 3) + i;
			record = space + number + space;
			shape += record + "\n";
		}
		System.out.println(shape);
	}
}