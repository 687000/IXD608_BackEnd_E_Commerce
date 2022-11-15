$(()=>{
	$(".to_vertical_menu").on("click",function(e){
		if(window.innerWidth<=550){
			$(".vertical_menu").toggle();
		}
	})
})