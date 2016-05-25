/**
 * 
 */
 
//$("#lengSpan").live("click",function(){
$("#lengSpan").click(function () {
	alert("s");
	window.location.href = 'main.php?action=FormMain&lenguage=SPA';
});//$("#lengSpan").click(function(){

//$("#lengEng").live("click", function () {
 $("#lengEng").click(function(){
    alert("s");
    window.location.href = 'main.php?action=FormMain&lenguage=ENG';
}); //$("#lengEng").click(function(){

$(".classHref").click("click", function () {
	window.location.href = 'http://www.scriptsteam.com';
});

$(window).load(function(){
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'Insert Your Code']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
});