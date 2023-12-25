package baitaplaptrinh;

public class e83_shape_17 {
	
	//			i
	// 1 		1
	//  2		2
	//   3		3
	//    4		4

	public static void main(String[] args) {
		String shape = "";
		int height = 5;
		String record = "";

		for (int i = 1; i <= height; i++){
			record = " ".repeat(i-1) + i;
			shape += record + "\n";
		}
		System.out.println(shape);
	}
}