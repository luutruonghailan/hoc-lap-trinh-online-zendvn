package baitaplaptrinh;

public class e85_shape_19 {
	
	public static void main(String[] args) {
		int height = 9; // height lẻ

		String shape = "";
		String shapeTop = "";
		String shapeBottom = "";
		String record = "";
		int center = height / 2 ;

		String line = 1 + " ".repeat(height - 2) + height;

		// Content Top
		for (int i = 2; i <= height / 2; i++){
			record = " ".repeat(i-1) + i + " ".repeat(height-2*i) + (height-i+1) ;
			shapeTop += record + "\n";
		}

		String cennterCharacter = " ".repeat(center) + (center+1) + "\n";
		
		// Content Bottom
		for (int i =  2 + center; i < height; i++){
			record = " ".repeat(height - i) + (height-i+1) + " ".repeat(2*i-height-2) + (i) ;
			shapeBottom += record + "\n";
		}

		shape = line + "\n" +  shapeTop + cennterCharacter  + shapeBottom + line; 
		System.out.println(shape);
	}
}