//$(document).ready(function);
//  $html  = '';
//$('.schoolButton').click(function(event) {
//	$.get('html/printschool.php', function(data) {
//		$('.containerPrint').html(data);
//	});
//});

// $html  = '';
//$('.adminsButton').click(function(event) {
//	$.get('html/printadmin.php', function(data) {
//		$('.containerPrint').html(data);
//	});

//new Promise(function (resolve){
//    $('.schoolButton').click(function(event) {
//	$.get('html/printschool.php', function(data) {
//		$('.containerPrint').html(data);
//	});
//});
//
//})
//.then(function(){
//    return new Promise(function(resolve){
//	$('.add').click(function(event) {
//    console.log('hi');
//	$.get('html/form.php', function(data) {
//		$('.containerForm').html(data);
//	});
//});
//});

//$('.add').click(function(event) {
//    console.log('hi')
//	$.get('html/form.php', function(data) {
//		$('.containerForm').html(data);
//	});
//});
//
////$('.button').click();
  

//$('.button').click(function() {
//
// $.ajax({
//  type: "POST",
//  url: "some.php",
//  data: { name: "John" }
//}).done(function( msg ) {
//  alert( "Data Saved: " + msg );
//});    
//
//    });

new Promise(function (resolve){
    $('.schoolButton').click(function(event) {
console.log('hi');
	('html/printschool.php', function(data) {
		resolve(data);
	});
     });
}).then(function(resolve){
    console.log('hi3');
	$('.containerPrint').html(data);
        resolve(data);
});

//.then(function(){
//	return new Promise(function(resolve){
//		$('form').click(function(e){
//		e.preventDefault();
//		resolve();
//
//	})
//  })
//})
