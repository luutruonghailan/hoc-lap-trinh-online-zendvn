package baitaplaptrinh;

public class e48_vowel {
	public static void main(String[] args) {
		char character 	= 'a';
		String result 	= "Không là nguyên âm";
		
		switch (character) {
			case 'u':
			case 'e':
			case 'o':
			case 'a':
			case 'i':
			case 'U':
			case 'E':
			case 'O':
			case 'A':
			case 'I':
				result = "Nguyên âm";
				break;
		}

		System.out.println(result);
	}
}