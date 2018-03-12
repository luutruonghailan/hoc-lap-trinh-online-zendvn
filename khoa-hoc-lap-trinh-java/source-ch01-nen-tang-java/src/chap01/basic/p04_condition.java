package chap01.basic;

public class p04_condition {
	
	// 003 SWITCH
	public static void main(String[] args) {
		int number		= 8;
		String result	= "";
		
		switch (number){
			case 2:
				result = "Thứ hai";
				break;
			case 3:
				result = "Thứ ba";
				break;
			case 4:
				result = "Thứ tư";
				break;
			case 1:
			case 8:
				result = "Chủ nhật";
				break;
			default:
				result = "Không hợp lệ";
				break;
		}
		
		System.out.println(result);
	}
		
	// 003 IF ELSE IF ELSE - Dạng 03
	public static void main008(String[] args) {
		int number	= 9;
		String str1	= "dương";
		String str2	= "chẵn";
		
		if(number < 0) 		str1 = "âm";
		if(number %2 == 1) 	str2 = "lẻ";
	
		System.out.println("nguyên " + str1 + " " + str2);
	}
		
	// 003 IF ELSE IF ELSE - Dạng 02 
	public static void main007(String[] args) {
		int number		= -6;
		String result	= "";
		
//		n >= 0 n%2==0	=> n nguyên dương chẵn
//		n >= 0 n%2==1	=> n nguyên dương lẻ
//		n < 0 n%2==0	=> n nguyên âm chẵn
//		n < 0 n%2==1	=> n nguyên âm lẻ
		
		if(number >= 0 && number %2 == 0){
			result	= "nguyên dương chẵn";
		} else if (number >= 0 && number %2 == 1){
			result	= "nguyên dương lẻ";
		} else if (number < 0 && number %2 == 0){
			result	= "nguyên âm chẳn";
		} else{
			result	= "nguyên âm lẻ";
		}
		System.out.println(result);
	}
	
	// 003 IF ELSE IF ELSE - Dạng 01 
	public static void main006(String[] args) {
		int number		= 4;
		
		if(number == 0) {
			System.out.println("Số không");
		}else if (number % 2 == 1){
			System.out.println("Số lẻ");
		}else{
			System.out.println("Số chẵn");
		}
	}
	
	// 002 IF ELSE
	public static void main005(String[] args) {
		int number		= 4;
		
		if(number % 2 == 0){
			System.out.println("Số chắn");
		} else{
			System.out.println("Số lẻ");
		}
	}
	
	// 001 IF - Dạng 04
	public static void main004(String[] args) {
		int number		= 15;
		String result	= "Số chắn";

		if(number % 2 == 1) result	= "Số lẻ"; 
		System.out.println(result);
	}
		
	// 001 IF - Dạng 03
	public static void main003(String[] args) {
		int number	= 15;
		int tmp		= number % 2;
		String result	= "";

		if(tmp == 1) result	= "Số lẻ"; 
		if(tmp == 0) result	= "Số chắn"; 
		System.out.println(result);
	}
		
	// 001 IF - Dạng 02
	public static void main002(String[] args) {
		int number	= 15;
		int tmp		= number % 2;
		System.out.println("tmp: " + tmp);

		if(tmp == 0) System.out.println("Số chắn");
		if(tmp == 1) System.out.println("Số lẻ");
	}
		
	// 001 IF - Dạng 01
	public static void main001(String[] args) {
		int number		= 15;
		int tmp		= number % 2;
		System.out.println("tmp: " + tmp);

		if(tmp == 0) {
			System.out.println("Số chắn");
		}

		if(tmp == 1) {
			System.out.println("Số lẻ");
		}
	}
}
