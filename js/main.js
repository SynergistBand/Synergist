$(document).ready(function(){
	if (($(document).width()) == "826") {
		$("header").addClass("mobile");
		
	}
});

function detectmob() {
   if(window.innerWidth <= 800 && window.innerHeight <= 600) {
     return true;
   } else {
     return false;
   }
}