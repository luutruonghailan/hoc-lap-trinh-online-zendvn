package baitaplaptrinh;

public class e92_sim_ngu_quy {
	public static void main(String[] args) {
		String yourNumber = "02233.23.3321"; // 0765743333
		String result  = "No";

		yourNumber = yourNumber.replace(".", "");

		for(int i = 1; i < yourNumber.length()-4; i++) {
			if(yourNumber.charAt(i) == yourNumber.charAt(i+1) 
				&& yourNumber.charAt(i) == yourNumber.charAt(i+2) 
				&& yourNumber.charAt(i) == yourNumber.charAt(i+3)
				&& yourNumber.charAt(i) == yourNumber.charAt(i+4)
			) {
				result  = "Yes";
				break;
			}
		}
		System.out.println(result);
	}
}