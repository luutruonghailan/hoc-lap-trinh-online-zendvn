package baitaplaptrinh;

public class Library {
	public String listNumber1ToN(int n) {
		String result 	= "";
		for (int i = 1; i <= n; i++) {
			result += i;
		}
		return result;
	}

	public String listNumberNTo1(int n) {
		String result 	= "";
		for (int i = n; i >= 1; i--) {
			result += i;
		}
		return result;
	}

	public String listNumberFromRangeAZ(int start, int end) {
		String result 	= "";
		for (int i = start; i <= end; i++) {
			result += i;
		}
		return result;
	}

	public String listNumberFromRangeAZ2Digit(int start, int end) {
		String result 	= "";
		for (int i = start; i <= end; i++) {
			if (i < 10) {
				result += "0" + i + " ";
			}else{
				result += i + " " ;
			}
		}
		return result;
	}

	public String listNumberFromRangeZA(int start, int end) {
		String result 	= "";
		for (int i = start; i >= end; i--) {
			result += i;
		}
	
		return result;
	}

	public String listNumberByTime(int start, int totalTimes, int step, String separator) {
		String result 	= "";
		int times = 0;
		while (times < totalTimes){
			result += (start+step*times) + separator;
			times++;
		}

		return result.substring(0, result.length() - separator.length());
	}


}