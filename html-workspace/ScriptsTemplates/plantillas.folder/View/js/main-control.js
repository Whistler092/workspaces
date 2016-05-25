/**
 * 
 */
$("#lengSpan").live("click",function(){
	window.location.href = 'main.php?action=FormMain&lenguage=SPA';
});//$("#lengSpan").click(function(){

$("#lengEng").live("click",function(){
	window.location.href = 'main.php?action=FormMain&lenguage=ENG';
});//$("#lengEng").click(function(){


$(".classHref").live("click",function(){
	window.location.href = 'http://www.scriptsteam.com';
});