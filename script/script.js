    $(document).ready(function(event){
        buildSchool();
//        new Promise (function(resolve){
//            $.get('html/printschool.php', function(data) {
//                resolve(data);
//            });  
//        });
//        }).then(function(data){
//            $('.containerPrint').html(data);
//        }).then( function (){
    });

$('.adminsButton').click(function(event) {
    $('.containerForm').empty();
    new Promise(function (resolve){
        $.get('html/printadmin.php', function(data){
            resolve(data);		
        });
    }).then(function (data) {
        $('.containerPrint').html(data);
    }).then(function(){
        return new Promise(function(resolve){
            $('.addadmin').click(function(event) {
                 resolve(event);
            });
        });
        
    }).then(function(resolve){
       return new Promise(function(resolve){
            $.get('html/formadmin.php', function(data) {
            resolve(data);	
    //	console.log(data);
            });
        });
    }).then(function (data) {
        $('.containerForm').html(data);
    });
  });  
//    *******************
//    

$('.schoolButton').click(function(event) {
    buildSchool();
       
 });
 
 function buildSchool(){
     new Promise(function (resolve){
        $('.containerForm').empty();
	$.get('html/printschool.php', function(data) {
            resolve(data);		
	});
    }).then(function (data) {
        $('.containerPrint').html(data);
    }).then(function(){
        $('.addstudent').click(function(event) {
            return new Promise(function(resolve){
                $.get('html/form.php', function(data){
                    resolve(event);
                
            }).then(function (data) {
                $('.containerForm').html(data);
                });
            });
        });
        $('.addcourse').click(function(event) {
            return new Promise(function(resolve){
                $.get('html/formcourse.php', function(data) {
                    resolve(event);
                }).then(function (data) {
                    $('.containerForm').html(data);
                });
            });
        });
    });   
       
     
 }
 
 