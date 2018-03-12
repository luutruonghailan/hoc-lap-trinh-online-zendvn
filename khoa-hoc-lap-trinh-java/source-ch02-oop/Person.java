package chap02.oop;

import java.util.Calendar;

public class Person {
	
	public String name;
	public String code;
	public int birthday;

	// CONSTRUCTOR
//	public Person(String vName, String vCode, int vBirthday) {
//		this.name 		= vName;
//		this.code 		= vCode;
//		this.birthday	= vBirthday;
//	}
//	
	// SETTER
	public void setName(String vName){
		this.name	= vName;
	}

	public void setCode(String vCode){
		this.code	= vCode;
	}
	
	public void setBirthday(int vBirthday){
		this.birthday	= vBirthday;
	}
	
	// GETTER
	public String getName(){
		return this.name;
	}
	
	public String getCode(){
		return this.code;
	}
	
	public int getBirthday(){
		return this.birthday;
	}
	
	public int getAge(){
		Calendar now	= Calendar.getInstance();
		return now.get(Calendar.YEAR) - this.getBirthday();
	}
	
	// Show Person Info
	public void showInfo(){
		System.out.println("---------------------------");
		System.out.println("Person Info: ");
		System.out.println("- Name \t\t:" + this.getName());
		System.out.println("- Code \t\t:" + this.getCode());
		System.out.println("- Birthday  \t:" + this.getBirthday());
		System.out.println("- Age  \t\t:" + this.getAge());
	}
	
}











