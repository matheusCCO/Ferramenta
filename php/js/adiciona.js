$(document).ready(function(){
  $(".container-fluid2").hide();
  $(".ola2").click(function(){
		$(this).toggleClass("active").next().slideToggle("slow");
		return false;	 
  });
});