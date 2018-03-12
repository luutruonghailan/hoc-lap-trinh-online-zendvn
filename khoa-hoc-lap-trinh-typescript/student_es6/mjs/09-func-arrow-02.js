let courses = ["Android", "java", "php", "angular"];

console.log(
	courses.map( course => {
		return course.toUpperCase();
	})
);

let scores = [9, 2, 8, 4, 7, 3, 1, 8];

scores.sort(
	(x, y) => x < y ? true : false
);

console.log(scores);