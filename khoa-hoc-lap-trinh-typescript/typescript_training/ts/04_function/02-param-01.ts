/*
// Đầy đủ các tham số
function userInfo1(name: string, age: number): string{
	return `My name is ${name}, ${age} years old`;
}

// Giá trị mặc định cho các tham số
function userInfo2(name: string = "john", age: number = 69): string{
	return `My name is ${name}, ${age} years old`;
}

// Tham số khuyết
function userInfo3(name: string = "john", age?: number): string{
	if(age == null){
		return `My name is ${name}`;
	} else {
		return `My name is ${name}, ${age} years old`;	
	}
	
}

console.log(userInfo3("peter", 20));

*/