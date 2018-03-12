/*
class Course {
	public id: string;
	private name: string;
	protected price: number;

	constructor(id: string, name: string, price: number){
		this.id = id;
		this.name = name;
		this.price = price;
	} 

	showCourseInfo(): void{
		console.log(`${this.id} - ${this.name} - ${this.price}`);
	}
}

class CourseMobile extends Course{
	author: string;

	constructor(id: string, name: string, price: number, author: string){
		super(id, name, price);
		this.author	= author;
	}

	checkPro(){
		console.log(this.price);
	}
}

let courseObj	= new Course('C112', "f", 23);
let courseMobileObj	= new CourseMobile('CO13', "Android", 60, "John");

console.log(courseObj.price);
courseMobileObj.checkPro();

/*					Inside	Outside		Child Class
	public			+		+			+
	private			+		- 			-
	protected		+		?			+
*/

