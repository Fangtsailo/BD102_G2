	$(function(){






   $("#SB_breadStore").click(function(){

      
      
      $("#SB_breadStoreList").slideToggle();
      $("#SB_breadCarList").slideUp();

   });


   $("#SB_breadCar").click(function(){

      
      $("#SB_breadCarList").slideToggle();
      $("#SB_breadStoreList").slideUp();;

   });

   
   var LeftBusinessClass = document.getElementById("LeftBusiness").classList;
   var lastScrollY = 80;

   window.addEventListener('scroll', function(){
   var st = this.scrollY;

   console.log(123);
      if( st > lastScrollY) {


          
          LeftBusinessClass.add('leftBarUp');
           console.log(456);
          

          
      }else{
        
        LeftBusinessClass.remove('leftBarUp');
        
      }
      lastScrollY = st;
  });




	     


    
        



   


   




});


