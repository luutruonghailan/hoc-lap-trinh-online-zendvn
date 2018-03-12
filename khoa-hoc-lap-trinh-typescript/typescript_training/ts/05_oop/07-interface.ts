// interface People {
// 	name: string;
// 	eat(): void;
// 	sleep(): void;
// }

// interface Bird {
// 	fly(): void;
// }

// class Machine {
// 	caculate(x: number, y: number): number {
// 		return x + y;
// 	}
// }

// class Superman extends Machine implements People, Bird {
// 	name: string;

// 	constructor(name: string){
// 		super();
// 		this.name = name;
// 	}

// 	eat(): void {
// 		console.log("eat");
// 	}
// 	sleep(): void {
// 		console.log("sleep");
// 	}

// 	fly(): void {
// 		console.log("fly");
// 	}
// }

// let john: Superman = new Superman("john");
// john.eat();
// john.sleep();
// john.fly();
// console.log(john.caculate(2,3));