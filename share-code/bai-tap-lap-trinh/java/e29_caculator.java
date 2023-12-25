package baitaplaptrinh;

public class e29_caculator {
	public static void main(String[] args) {
		int numberFirst 	= 10;
		int numberSecond	= 5;
		int result			= 0;
		String caculate 	= "g";
		boolean canCaculate = true;
		
		switch (caculate) {
			case "+":
				result	= numberFirst + numberSecond;
				break;
			case "-":
				result	= numberFirst - numberSecond;
				break;
			case "*":
			case "x":
				result	= numberFirst * numberSecond;
				break;
			case "/":
			case ":":
				result	= numberFirst / numberSecond;
				break;
			case "%":
				result	= numberFirst % numberSecond;
				break;
			default:
				canCaculate = false;
				break;
		}
		
		if(canCaculate == true){
			System.out.printf("%d %s %d = %d", numberFirst, caculate, numberSecond, result);
		}else{
			System.out.print("Không thực hiện được, chỉ chấp nhận các phép tính + - x :");
		}
		
	}
}