function showInfo(name ="ES6", price = 20){
	return `Course name: <b>${name}</b>, price: <b>${price}</b>`;
}

var dom = document.getElementById("mContent");
dom.style.color = "#0174DF";   
dom.innerHTML	= showInfo();