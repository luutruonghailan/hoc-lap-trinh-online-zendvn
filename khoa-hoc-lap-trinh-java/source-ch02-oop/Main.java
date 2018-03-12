package chap02.oop;

public class Main {
	
	// Tổng hai phân số 
	public static void main(String[] args) {
		Fraction fractionA = new Fraction(1, 4);
		Fraction fractionB = new Fraction(2, 4);
		
		Fraction fractionC = new Fraction(fractionA, fractionB, "+");
		System.out.printf("%s + %s = %s", fractionA.print(), fractionB.print(), fractionC.print());
	}
		
	// 009 Fraction  
	// UCLN của 2 số a và b là giá trị lớn nhất mà cả 2 số a và b đều chia hết cho nó
	// Kiểm tra phân số tối giản khi UCLN của tử số và mẫu số = 1
	// Tối giản phân số
	// 3/9	1/3		UCLN = 3
	
	public static void main009(String[] args) {
		Fraction fractionA	= new Fraction(2, 8);	// 2/4
		Fraction fractionB	= new Fraction(2, 4);	// 3/9
		
		System.out.println(fractionA.print());
		fractionA.normalize();
		System.out.println(fractionA.print());
	}
		
	// 008 Fraction  
	// Khởi tạo phân số
	// Nhập phân số
	// In phân số
	
	public static void main008(String[] args) {
		Fraction fractionA	= new Fraction(2, 4);
		Fraction fractionB	= new Fraction(3, 9);
		
		System.out.println(fractionA.print());
		System.out.println(fractionB.print());
	}
	// Static
	public static void main08(String[] args) {
		Counter counterObj1	= new Counter();	// object instance
		Counter counterObj2	= new Counter();
		Counter counterObj3	= new Counter();
//		
//		counterObj1.showCount();
//		counterObj2.showCount();
//		counterObj3.showCount();
		Counter.showCount();
	}
	
	// 007 Access modifier  
	//	Private chỉ truy cập được trong class 				(property, method)
	//	Null (rỗng) truy cập trong package 					(class,property, method)
	//	Protected truy cập trong package và các subclasses 	(property, method)
	//	Public truy cập từ bất kỳ đâu 						(class, property, method)

	public static void main007(String[] args) {
		Person personObj	= new Person();
		personObj.name		= "Abc";
		
	}
	
	// 006 Overriding  
	public static void main006(String[] args) {
		Student studentObj	= new Student();
		studentObj.setName("Peter");
		studentObj.setCode("SV001");
		studentObj.setBirthday(1997);
		studentObj.setScore(8.5);
		
		studentObj.showInfo();
	}
		
	// 005 Inheritance 
	public static void main005(String[] args) {
		Person personObj	= new Person();
		//personObj.showInfo();
		
		Student studentObj	= new Student();
		studentObj.setName("Peter");
		studentObj.showInfo();
		
		Teacher teacherObj	= new Teacher();
		teacherObj.setName("Mr Peter");
		teacherObj.showInfo();
	}
	
	// 004 Constructor
	/*
	public static void main004(String[] args) {
		Student studentOne	= new Student("John", "Sv009", 2000);
		studentOne.showInfo();
	}

	// 003 Overloading
	public static void main003(String[] args) {
		
		Student studentOne	= new Student();
		
		//studentOne.setCode("S001");
		studentOne.setCode(456);
		
		System.out.println("Code: " + studentOne.getCode());
	}
	
	// 002 Setter + Getter + Method
	public static void main002(String[] args) {
		
		Student studentOne	= new Student();
		Student studentTwo	= new Student();
		
		// studentOne
		studentOne.setBirthday(1994);
		studentOne.setName("John");
		studentOne.setCode("S001");
		studentOne.showInfo();
		
		// studentTwo
		studentTwo.setBirthday(1990);
		studentTwo.setName("Peter");
		studentTwo.setCode("S002");
		studentTwo.showInfo();
	}
		
	// 001 Property
	public static void main001(String[] args) {
		
		Student studentOne	= new Student();
		Student studentTwo	= new Student();
		
		studentOne.birthday	= 1994;
		studentOne.name		= "John";
		studentOne.code		= "S001";
		
		studentTwo.birthday	= 1990;
		studentTwo.name		= "Peter";
		studentTwo.code		= "S002";
		
		System.out.println("Student Info: ");
		System.out.println("- Name: " + studentOne.name);
		System.out.println("- Code: " + studentOne.code);
		System.out.println("- Birthday: " + studentOne.birthday);
		
		System.out.println("--------------------------");
		
		System.out.println("Student Info: ");
		System.out.println("- Name: " + studentTwo.name);
		System.out.println("- Code: " + studentTwo.code);
		System.out.println("- Birthday: " + studentTwo.birthday);
	}
	*/
}

