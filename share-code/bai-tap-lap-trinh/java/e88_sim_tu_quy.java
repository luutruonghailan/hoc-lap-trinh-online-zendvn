package baitaplaptrinh;

public class e88_sim_tu_quy {
	public static void main(String[] args) {
		String yourNumber = "0323.33.1321"; // 0765743333
		String result  = "No";

		yourNumber = yourNumber.replace(".", "");

		for(int i = 1; i < yourNumber.length()-3; i++) {
			if(yourNumber.charAt(i) == yourNumber.charAt(i+1) 
				&& yourNumber.charAt(i) == yourNumber.charAt(i+2) 
				&& yourNumber.charAt(i) == yourNumber.charAt(i+3)) {
				result  = "Yes";
				break;
			}
		}
		System.out.println(result);
	}
}