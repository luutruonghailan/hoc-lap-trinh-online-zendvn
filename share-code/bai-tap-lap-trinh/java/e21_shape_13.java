package baitaplaptrinh;

public class e21_shape_13 {
	
	//			i
	//     1	1
	//    21 	2
	// 	 321	3
	//  4321
	// 54321

	public static void main(String[] args) {
		Library zendvnLibrary = new Library();
		String shape = "";
		int height = 5;
		String record = "";

		for (int i = 1; i <= height; i++){
			record = " ".repeat(height-i) + zendvnLibrary.listNumberNTo1(i);
			shape += record + "\n";
		}
		System.out.println(shape);
	}
}