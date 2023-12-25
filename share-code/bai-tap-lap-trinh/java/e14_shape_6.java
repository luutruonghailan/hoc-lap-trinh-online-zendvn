package baitaplaptrinh;

public class e14_shape_6 {
	/*
	 * 
	 * 	int height = 5;
	 * 				i		space	left
	 	    1				4		dãy số 1 về 2
		   212				3		dãy số 2 về 2
		  32123						dãy số 3 về 2
		 4321234					dãy số 4 về 2
		543212345
	 */
	public static void main(String[] args) {
		Library zendvnLibrary = new Library();
		int height 		= 5;
		String shape 	= "";
		String record 	= "";

		for (int i = 1; i <= height; i++) {
			String space 	= " ".repeat(height-i);
			String left 	= zendvnLibrary.listNumberFromRangeZA(i, 2);
			String right 	= zendvnLibrary.listNumberFromRangeAZ(2,i);
			record = space + left + 1 + right + space;
			shape += record + "\n";
		}
		System.out.println(shape);
	}
}