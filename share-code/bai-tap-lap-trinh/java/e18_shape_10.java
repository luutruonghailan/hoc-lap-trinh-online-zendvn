package baitaplaptrinh;

public class e18_shape_10 {
	
	public static void main(String[] args) {
		String shape = "";
		int height = 9;
		String record = "";
		String character = "x ";

		// Line 1
		shape = character.repeat(height) + "\n";

		// Content
		for (int i = 2; i < height; i++){
			record = "  ".repeat(height - i) + character;
			shape += record + "\n";
		}

		// Line height
		shape += character.repeat(height);

		System.out.println(shape);
	}

}