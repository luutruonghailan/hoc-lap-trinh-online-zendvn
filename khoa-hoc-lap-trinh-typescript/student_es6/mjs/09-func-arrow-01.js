function func01(name, age) {
	return `func01 My name is ${name}, ${age} years old`;
}

var func02 = function(name, age) {
	return `func02 My name is ${name}, ${age} years old`;
}

var func03 = (name, age) => {
	return `func03 My name is ${name}, ${age} years old`;
}

var func04 = (name, age) => 
	`func04 My name is ${name}, ${age} years old`;
	//return `func04 My name is ${name}, ${age} years old`;

var func05 = name => {
	return `func05 My name is ${name}`;
}

var func06 = () => {
	return `func06 My name is`;
}

console.log(func06());