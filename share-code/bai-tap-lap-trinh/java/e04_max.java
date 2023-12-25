package baitaplaptrinh;

public class e04_max {
	public static void main(String[] args) {
		int numberOne		= 285;
		int numberTwo		= 125;
		int numberThree		= 185;	
		
		int maxNumber		= Math.max(Math.max(numberOne, numberTwo), numberThree);
        System.out.printf("Số lớn nhất trong 3 số %d, %d, %d là %d", numberOne, numberTwo, numberThree, maxNumber);
	}


}