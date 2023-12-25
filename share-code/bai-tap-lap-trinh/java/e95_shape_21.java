package baitaplaptrinh;

public class e95_shape_21 {
	public static void main(String[] args) {
		int height = 9;
		String shape = "";
		String record = "";
		
		// Top
		for (int i = 1; i<= height; i++){
			String character = (i % 2 == 0) ? "x" : "o";
			String arround = " ".repeat(height - i);
			String center  = (i + character).repeat(i);
			center = center.substring(0, center.length()-1);
			record = arround + center + arround;
			
			shape += record + "\n";
		}
System.out.println((2*height+1)/3);
System.out.println((2*height-5)/3);
		// Bottom
		for (int i = 1; i<=height/2; i++){
			record = " ".repeat((3*height-7)/4) + "|" + " ".repeat((height+1)/2)+ "|";
			shape += record + "\n";
		}

		shape += "-".repeat(2* height - 1);
		System.out.println(shape);
	}
}