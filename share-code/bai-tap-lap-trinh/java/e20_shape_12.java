package baitaplaptrinh;

public class e20_shape_12 {
	
	//			i
	// 123		1	1 đến 3
	//  12      2	1 đến 2
	//   1      3	1

	public static void main(String[] args) {
		Library zendvnLibrary = new Library();
		String shape = "";
		int height = 5;
		String record = "";

		for (int i = 1; i <= height; i++){
			record = " ".repeat(i-1) + zendvnLibrary.listNumber1ToN(height + 1 - i);
			shape += record + "\n";
		}
		System.out.println(shape);
	}

}