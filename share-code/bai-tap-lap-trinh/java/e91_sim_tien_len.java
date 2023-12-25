package baitaplaptrinh;

public class e91_sim_tien_len {
	public static void main(String[] args) {
		String yourNumber = "0589.24.4456"; 
		String result  = "No";

		yourNumber = yourNumber.replace(".", "");
		yourNumber = yourNumber.substring(yourNumber.length()-3);

		int first 	= Character.getNumericValue(yourNumber.charAt(0));
		int second 	= Character.getNumericValue(yourNumber.charAt(1));
		int third 	= Character.getNumericValue(yourNumber.charAt(2));
		
		if(first == second - 1 && first == third - 2) {
			 result  = "Yes";
		}

		System.out.println(result);
	}
}