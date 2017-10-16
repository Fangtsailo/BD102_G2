$(function(){


   $(".dutyChange").click(function(){

       

        $(this).toggleClass("dutyColorChange");

        if($(this).hasClass("dutyColorChange")){
          $(this).attr("value","復原");
        }else{
          $(this).attr("value","停權");
        }


        
        // $("img").attr("width","180");

    //     var image;
    //     }
    //   if ($("[data-button='5']").hasClass("selected"))
    // image = "hintalaskurikuvat/greenstatus.png";   
    //   else
    // image = "hintalaskurikuvat/redstatus.png";

    // $("[data-button='5'] .status").attr("src" , image);



    });


});


