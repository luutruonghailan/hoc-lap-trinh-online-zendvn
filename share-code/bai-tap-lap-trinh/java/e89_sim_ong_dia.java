package baitaplaptrinh;

public class e89_sim_ong_dia {
	public static void main(String[] args) {
		String yourNumber = "0323.33.1318"; // 0765743333
		String result  = "No";

		yourNumber = yourNumber.replace(".", "");
		int tmp = Integer.valueOf(yourNumber.substring(yourNumber.length()-2));

		if(tmp == 38 || tmp == 78) result = "Yes";
		System.out.println(result);
	}
}