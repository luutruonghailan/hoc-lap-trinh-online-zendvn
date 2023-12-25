package baitaplaptrinh;

public class e16_shape_8 {
	// int height = 4
	//			i			
	// 1 3 5	1
    // 2 4 6	2
    // 3 5 7	3
    // 4 6 8	4

	public static void main(String[] args) {
		Library zendvnLibrary = new Library();
		int height = 9;
		String shape = "";
		String record = "";
		for (int i = 1; i<= height; i++){
			record = zendvnLibrary.listNumberByTime(i, 4, 2, " ");
			shape += record + "\n";
		}
		System.out.println(shape);
	}
}