package baitaplaptrinh;

public class e47_film {
	public static void main(String[] args) {
		int yourAge = 20;
		final int LIMIT_AGE_VIEW_FILM = 18;
		String filmName = "Thế giới lập trình";
		String result 	= "Bạn KHÔNG được xem phim";

		if (yourAge >= LIMIT_AGE_VIEW_FILM) {
			result = "Bạn được xem phim"; 
		}

		System.out.println(result  + " " + filmName);
	}
}