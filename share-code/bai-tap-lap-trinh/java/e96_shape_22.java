package baitaplaptrinh;

public class e96_shape_22 {
	// 01                  	1
	// 02 03             	2
	// 04 05 06           	4
	// 07 08 09 10         	7
	// 11 12 13 14 15       11
	// 16 17 18 19 20 21	16
	public static void main(String[] args) {
		Library zendvnLibrary = new Library();
		String shape = "";
		int height = 6;
		int start = 1;
		int end = 1;
		String record = "";

		for (int i = 1; i <= height; i++){
			record = zendvnLibrary.listNumberFromRangeAZ2Digit(start, end);
			shape += record + "\n";

			start = end + 1;
			end = start + i;
		}
		System.out.println(shape);
	}
}