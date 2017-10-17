$(function(){


   $(".dutyChange").click(function(){

       

        $(this).toggleClass("dutyColorChange");

        if($(this).hasClass("dutyColorChange")){



          $(this).attr("value","復原");

          $(this).parent(".authorityName").text("停權");

          //alert($(this).parent().parent('td .authorityName').innerHTML);
          // alert($(this).parent('.authorityName').html());

        }else{
          $(this).attr("value","停權");
          $(this).parent('.authorityName').html("正常");
          // $(this).parent('.authorityName').html="正常";
        }


        
        



    });


});


