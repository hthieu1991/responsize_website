//Check active link for top menu
var path_name = window.location.pathname;
var path_array = path_name.split("/");

$("#bs-example-navbar-collapse-9 a").each(function(index,value){
	/** for host */
	if($(value).attr("href")==path_array[1] ){
	/** for local */
	// if($(value).attr("href")==path_array[2]){
		$(value).parent().addClass("active");
		
	}else{

		$(value).parent().removeClass("active");
		if (path_array[1]=='') {
			$("#bs-example-navbar-collapse-9 a[href='index.php']").parent().addClass("active");
		};
	}	
});
// Check active link for category

$("#category a").each(function(index,value){
	/** for host */
	if($(value).attr("href")==path_array[1]){
	/** for local */
	// if($(value).attr("href")==path_array[2]){
		$(value).parent().addClass("active");
		
	}else{

		$(value).parent().removeClass("active");
	}	
});
