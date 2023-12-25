package baitaplaptrinh;

public class e13_shape_5 {
	/*
	 * 
	 * 	int height = 5;
	 * 				i		content
	 	1			1		Dãy số tăng từ 1 đến 1
		12			2		Dãy số tăng từ 1 đến 2
		123			3		Dãy số tăng từ 1 đến 3
		1234
		12345				Dãy số tăng từ 1 đến i
	 */
	public static void main(String[] args) {
		Library zendvnLibrary = new Library();

		int height 		= 5;
		String shape 	= "";
		String record 	= "";

		for (int i = 1; i <= height; i++) {
			record = zendvnLibrary.listNumber1ToN(i);
			shape += record + "\n";
		}
		System.out.println(shape);
	}
}