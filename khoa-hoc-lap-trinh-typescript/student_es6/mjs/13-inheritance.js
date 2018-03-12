class Person {
	constructor(name, code, age) {
		this.name 	= name;
		this.age 	= age;
		this.code 	= code;
	}

	showInfo(){
		console.log(this.name + " - " + this.code + " - " + this.getAge());
	}

	getAge(){
		let today 	= new Date();
		let year 	= today.getFullYear();
		return year - this.age;
	}
}

class Student extends Person {
	constructor(name, code, age, score){
		super(name, code, age);
		this.score 	= score;
	}

	showInfo(){
		super.showInfo();
		console.log(" - " + this.score);
	}
}

let personObj = new Person("john", "132213", 2000);
personObj.showInfo();

let studentObj = new Student("peter", "123", 1998, 80);
studentObj.showInfo();