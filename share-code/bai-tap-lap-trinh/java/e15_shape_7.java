package baitaplaptrinh;

public class e15_shape_7 {
	// int height = 5
	//				i		arround			center			
	// ----1----	1		"-".r(4)		1.r(1)
	// ---222---	2		"-".r(3)		2.r(3)
	// --33333--	3		"-".r(2)		3.r(5)
	// -4444444-	4		"-".r(1)		4.r(7)
	// 555555555	5		"-".r(0)		5.r(9)
	// ? liên quan với i và height

	public static void main(String[] args) {
		int height = 9;
		String shape = "";
		String record = "";
		for (int i = 1; i<= height; i++){
			String arround = "=".repeat(height - i);
			String center  = (i + "").repeat(2 * i - 1);

			record = arround + center + arround;
			shape += record + "\n";
		}
		System.out.println(shape);
	}
}