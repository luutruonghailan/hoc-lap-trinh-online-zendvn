package baitaplaptrinh;

public class e11_shape_3 {
	/*
	 * 
	 * 	int height = 6;
	 * 				i		content
	 	====+		1		"=".repeat(4) + "+".repeat(1)
		===++
		==+++
		=++++
		+++++
	 */
	public static void main(String[] args) {
		int height 		= 5;
		String shape 	= "";
		String record 	= "";

		for (int i = 1; i <= height; i++) {
			record = "=".repeat(height-i) + "+".repeat(i);
			shape += record + "\n";
		}
		System.out.println(shape);
		
	}
}