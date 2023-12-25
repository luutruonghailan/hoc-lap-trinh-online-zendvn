package baitaplaptrinh;

public class e82_shape_16 {
	
	//			i
	// 1234		1
	// 234 		2
	// 34		3
	// 4

	public static void main(String[] args) {
		Library zendvnLibrary = new Library();
		String shape = "";
		int height = 5;
		String record = "";

		for (int i = 1; i <= height; i++){
			record = zendvnLibrary.listNumberFromRangeAZ(i, height);
			shape += record + "\n";
		}
		System.out.println(shape);
	}
}