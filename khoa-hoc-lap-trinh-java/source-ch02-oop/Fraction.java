package chap02.oop;

public class Fraction {
	private int numerator;
	private int denominator;
	
	public Fraction(int numerator, int denominator){
		this.numerator		= numerator;
		this.denominator	= denominator;
	}
	
	public Fraction(Fraction fractionA, Fraction fractionB, String operator){
		fractionA.normalize();
		fractionB.normalize();
		
		switch (operator) {
			case "+":
				this.add(fractionA, fractionB);
				break;
			case "-":
				this.sub(fractionA, fractionB);
				break;
			case "*":
			case "x":
			case "X":
			case ".":
				this.multiply(fractionA, fractionB);
				break;
			case "/":
			case ":":
				this.divide(fractionA, fractionB);
			default:
				this.add(fractionA, fractionB);
				break;
		}
	}
	
	// Tạo phần hiển thị cho phân số
	// 2/4
	public String print(){
		return this.getNumerator() + "/" + this.getDenominator();
	}
	
	// Tổng 2 phân số x/y + a/b = (x*b + a*y)/(y*b)
	private void add(Fraction fractionA, Fraction fractionB){
		this.setNumerator(fractionA.getNumerator() * fractionB.getDenominator() + fractionA.getDenominator() * fractionB.getNumerator());
		this.setDenominator(fractionA.getDenominator() * fractionB.getDenominator());
		this.normalize();
	}
	
	// Hiệu 2 phân số x/y - a/b = (x*b - a*y)/(y*b)
	private void sub(Fraction fractionA, Fraction fractionB){
		System.out.println("sub");
	}
	
	// Tích 2 phân số x/y * a/b = (x*a)/(y*b)
	private void multiply(Fraction fractionA, Fraction fractionB){
		System.out.println("multiply");
	}
	
	// Thương 2 phân số x/y : a/b = (x*b)/(y*a)
	private void divide(Fraction fractionA, Fraction fractionB){
		System.out.println("divide");
	}
		
	// Tìm UCLN
	private int UCLN(int x, int y){
		int ucln	= Math.min(x, y);
		while(ucln >= 1){
			if(x % ucln == 0 && y % ucln == 0) return ucln;
			ucln--;
		}
		return ucln;
	}
	
	// Kiểm tra phân số tối giản (UCLN của tử số và mẫu số = 1)
	public boolean checkNormalize(){
		if(this.UCLN(this.getNumerator(), this.getDenominator()) == 1) return true;
		return false;
	}
	
	// Tối giản phân số
	public void normalize(){
		int ucln	= this.UCLN(this.getNumerator(), this.getDenominator());
		if(ucln > 1){
			this.setNumerator(this.getNumerator() / ucln);
			this.setDenominator(this.getDenominator() / ucln);
		}
	}
		
	public int getNumerator() {
		return numerator;
	}

	public void setNumerator(int numerator) {
		this.numerator = numerator;
	}

	public int getDenominator() {
		return denominator;
	}

	public void setDenominator(int denominator) {
		this.denominator = denominator;
	}
}
