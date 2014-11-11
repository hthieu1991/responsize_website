//Check active link for top menu
var path_name = window.location.pathname;
var path_array = path_name.split("/");

$(".header a").each(function(index,value){

	if($(value).attr("href")==path_array[2]){

		$(value).parent().addClass("active");
		
	}else{

		$(value).parent().removeClass("active");
	}	
});
