package baitaplaptrinh;

public class e86_shape_20 {
	
	//			i
	// 1234		1
	// 2  5		2
	// 3  6		3
	// 4567		4

	public static void main(String[] args) {
		Library zendvnLibrary = new Library();
		int height = 4;

		String shape = zendvnLibrary.listNumber1ToN(height) + "\n";
		String record = "";

		for (int i = 2; i < height; i++){
			record = i + " ".repeat(height-2) + (i+height-2+1);
			shape += record + "\n";
		}

		shape += zendvnLibrary.listNumberByTime(height,height,1, "");
		System.out.println(shape);
	}
}