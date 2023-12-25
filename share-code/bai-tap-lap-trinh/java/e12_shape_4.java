package baitaplaptrinh;

public class e12_shape_4 {
	/*
	 * 
	 * 	int height = 6;
	 * 				i		content
	 	+++++		1		"=".repeat(0) + "+".repeat(5)
		=++++		2		"=".repeat(1) + "+".repeat(4)
		==+++		3
		===++		4
		====+		5
	 */
	public static void main(String[] args) {
		int height 		= 5;
		String shape 	= "";
		String record 	= "";

		for (int i = 1; i <= height; i++) {
			record = "=".repeat(i-1) + "+".repeat(height-i);
			shape += record + "\n";
		}
		System.out.println(shape);
		
	}
}