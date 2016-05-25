/*
$( "p" ).bind( "click", function() {
  foo: $( this ).text() ;
});*/

function handler( event ) {
  alert( event.data.foo );
}
$( "p" ).bind( "click", {
  foo: "bar"
}, handler );

/*$( "p" ).bind( "click", function( event ) {
  var str = "( " + event.pageX + ", " + event.pageY + " )";
  $( "span" ).text( "Click happened! " + str );
});

$( "p" ).bind( "dblclick", function() {
  $( "span" ).text( "Double-click happened in " + this.nodeName );
});

$( "p" ).bind( "mouseenter mouseleave", function( event ) {
  $( this ).toggleClass( "over" );
});*/