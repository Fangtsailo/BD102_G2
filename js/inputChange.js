$(function(){


   $(".dutyChange").click(function(){

       

        $(this).toggleClass("dutyColorChange");

        if($(this).hasClass("dutyColorChange")){



          $(this).attr("value","復原");
          $(this).parent().siblings(".authorityName").text("停權");
          $(this).parent().siblings(".authorityName").css("color", "#cc4e4e");

          //alert($(this).parent().parent('td .authorityName').innerHTML);
          // alert($(this).parent('.authorityName').html());

        }else{
          $(this).attr("value","停權");
          $(this).parent().siblings('.authorityName').html("正常");
          $(this).parent().siblings(".authorityName").css("color", "#000");
          // $(this).parent('.authorityName').html="正常";
        }


    });


});


