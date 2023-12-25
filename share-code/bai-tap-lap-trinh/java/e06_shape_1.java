package baitaplaptrinh;

public class e06_shape_1 {
	/*
	 * 			i		content
	 	+		1		+ lặp 1 lần
		++ 		2		+ lặp 2 lần
		+++		3		+ lặp 3 lần
		++++	4		+ lặp 4 lần		
						+ lặp i lần
	 */
	public static void main(String[] args) {
		int height 		= 8;
		String shape 	= "";
		String record 	= "";

		for (int i = 1; i <= height; i++) {
			record = "+".repeat(i);
			shape += record + "\n";
		}
		System.out.println(shape);
	}
}