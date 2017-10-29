	$(function(){


   

	


    var bodyClass = document.body.classList,
    lastScrollY = 80;


    var subtitleClass= document.getElementById("subtitle").classList;
    var CoverRightMyClass = document.getElementById("CoverRightMy").classList;



	window.addEventListener('scroll', function(){
 	 var st = this.scrollY;
  		if( st > lastScrollY) {
  	  		
  	  		subtitleClass.add('hideUp_sub');
  	  		CoverRightMyClass.remove('moveToLeft');

          
  		}else{
    		
    		subtitleClass.remove('hideUp_sub');
    		CoverRightMyClass.remove('moveToLeft');
  		}
  		lastScrollY = st;
	});



    $(".burger").click(function(){

       

          $(".CoverRightMy").toggleClass("moveToLeft");

        



    });


   




});


