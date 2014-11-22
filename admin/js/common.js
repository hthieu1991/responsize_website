var path_name = window.location.pathname;
var path_array = path_name.split("/");
$("#admin_sidebar a").each(function(index,value){
	/** for host */
	// if($(value).attr("href")==path_array[1]){
	/** for local */
	if($(value).attr("href")==path_array[3]){
		$(value).parent().addClass("active");
		
	}else{

		$(value).parent().removeClass("active");
	}	
});