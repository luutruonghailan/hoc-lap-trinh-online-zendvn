// // ID NAME PRICE	string string number
// // ID NAME PRICE	number string string
// // ID NAME PRICE	string number boolean
// class Product<A, B, C> {
// 	id: A;
// 	name: B;
// 	price: C;

// 	constructor(id: A, name: B, price: C){
// 		this.id = id;
// 		this.name = name;
// 		this.price = price;
// 	}

// 	showProductInfo(){
// 		console.log(`${this.id} - ${this.name} - ${this.price}`);
// 	}
// }

// let product1 = new Product<string, string, number>("ID1", "Product 1", 20);
// let product2 = new Product<number, string, string>(12, "Product 2", "20 USD");
// let product3 = new Product<string, number, boolean>("12", 23, false);
// product1.showProductInfo();
// product2.showProductInfo();
// product3.showProductInfo();