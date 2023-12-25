
package baitaplaptrinh;

public class e50_even_number {
	public static void main(String[] args) {
		int number 		= -998;
		String strOne 	= "dương";
		String strTwo 	= "chẵn";

		if (number < 0) strOne = "âm"; 
		if (number % 2 != 0) strTwo = "lẻ";

		System.out.println("Số nguyên " + strOne + " " + strTwo);
	}
}