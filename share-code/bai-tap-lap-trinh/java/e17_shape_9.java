package baitaplaptrinh;

public class e17_shape_9 {
	// int height = 4
	//			i			
	// ==1==
	// =121=
	// 12321

	public static void main(String[] args) {
		Library zendvnLibrary = new Library();
		String shape = "";
		int height = 8;
		for (int i = 1; i<= height; i++){
			String arround = "-".repeat(height - i);
			String left  = zendvnLibrary.listNumber1ToN(i-1);
			String right = zendvnLibrary.listNumberNTo1(i-1);

			String center  = left + i + right;
			String record = arround + center + arround;
			shape += record + "\n";
		}
		System.out.println(shape);
	}
}