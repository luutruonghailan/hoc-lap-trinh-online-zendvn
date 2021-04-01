$(document).ready(function() {
	//feed to parse
	var feed = "https://vnexpress.net/rss/the-thao.rss";
	
	$.ajax(feed, {
		accepts:{
			xml:"application/rss+xml"
		},
		dataType:"xml",
		success:function(data) {
			console.log(data);
            $(data).find("item").each(function () { // or "item" or whatever suits your feed
                var el = $(this);
               
				
				 console.log("title      : " + el.find("title").text());
				// console.log("link       : " + el.find("link").text());
				// console.log("description: " + el.find("description").text());
			});

		}	
	});
	
});