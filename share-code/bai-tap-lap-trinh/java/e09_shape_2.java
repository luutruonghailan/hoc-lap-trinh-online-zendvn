package baitaplaptrinh;

public class e09_shape_2 {
	/*
	 * 
	 * 	int height = 6;
	 * 				i		content
	 	1+			1		+ lặp 1 lần		+ lặp i lần 	i lẻ
		2xx 		2		x lặp 2 lần		= lặp i lần 	i chẳn
		3+++		3		+ lặp 3 lần
		4xxxx		4		x lặp 4 lần
		5+++++		5		+ lặp 5 lần
		6xxxxxx		6		x lặp 6 lần

		Dòng lẻ +, dòng chẵn x
	 */
	public static void main(String[] args) {
		int height 		= 4;
		String shape 	= "";
		String record 	= "";

		for (int i = 1; i <= height; i++) {
			String character = "+";
			if (i % 2 == 0 ) {
				character = "x";
			}
			record = i + character.repeat(i);
			shape += record + "\n";
		}
		System.out.println(shape);
		
	}
}