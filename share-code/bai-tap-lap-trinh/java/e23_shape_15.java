package baitaplaptrinh;

public class e23_shape_15 {
	
	public static void main(String[] args) {
		int height = 7;
		int length = height/2;
		String shape 		= "";
		String shapeTop 	= "";
		String space = "";
		String character = "";

		for(int i = 1; i <= length; i++) {
		    space 	    = " ".repeat(length + 1 - i);
		    character   = "*".repeat(i * 2 - 1);
		    shapeTop += space + character + space + "\n";
		}
		
		StringBuilder shapeBottom = new StringBuilder(shapeTop);
		shapeBottom.reverse();

		shape = shapeTop + "*".repeat(height) + shapeBottom.toString();
		
		System.out.println(shape);
	}
}