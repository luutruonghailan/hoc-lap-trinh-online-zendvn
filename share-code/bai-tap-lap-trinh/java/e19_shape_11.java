package baitaplaptrinh;

public class e19_shape_11 {
	//			i
	// *****	1
    //  * *		2
    //   *		3
    //  * *		4
    // *****	5	
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
			record = " ".repeat(i-1) + character + " ".repeat(height-2*i) + character ;
			shapeTop += record + "\n";
		}

		String cennterCharacter = " ".repeat(center) + character + "\n";
		
		// Content Bottom
		for (int i =  2 + center; i < height; i++){
			record = " ".repeat(height - i) + character + " ".repeat(2*i-height-2) + character ;
			shapeBottom += record + "\n";
		}

		shape = line + "\n" +  shapeTop + cennterCharacter  + shapeBottom + line; 
		System.out.println(shape);
	}
}