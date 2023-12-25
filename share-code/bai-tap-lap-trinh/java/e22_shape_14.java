package baitaplaptrinh;

public class e22_shape_14 {
	
	//			i
	//     1	1
	//    21 	2
	// 	 321	3
	//  4321
	// 54321

	public static void main(String[] args) {
		int height = 15; // height lẻ

		String shape = "";
		String shapeTop = "";
		String shapeBottom = "";
		String record = "";
		String character = "x";
		int center = height / 2 ;

		String line = character.repeat(height);

		// Content Top
		for (int i = 2; i <= height / 2; i++){
			record = character + " ".repeat(i-2) + character + " ".repeat(height-2*i) + character + " ".repeat(i-2) + character;
			shapeTop += record + "\n";
		}

		String cennterCharacter = character + " ".repeat(center-1) + character + " ".repeat(center-1) + character + "\n";
		
		// Content Bottom
		for (int i =  2 + center; i < height; i++){
			record = character + " ".repeat(height - i - 1) + character + " ".repeat(2*i-height-2) + character + " ".repeat(height - i - 1) + character  ;
			shapeBottom += record + "\n";
		}

		shape = line + "\n" +  shapeTop + cennterCharacter  + shapeBottom + line; 
		System.out.println(shape);
	}
}