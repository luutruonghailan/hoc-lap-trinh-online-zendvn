package baitaplaptrinh;

public class e05_random_number {
	public static void main(String[] args) {
		int startNumber = 12;
		int endNumber 	= 19;

		if(startNumber > endNumber) {
			System.out.println("Số bắt đầu phải nhỏ hơn Số kết thúc");
		}else{
			int randomNumber = (int) ((Math.random() * (endNumber - startNumber)) + startNumber);     
			System.out.println("Số ngẫu nhiên: " + randomNumber);
		}
	}


}