//memedit.php 開啟密碼光箱
// $(function(){

// 	$(".openlightbox").click(function(){
// 		$(".box").css("display","block");
// 	});

// 	$(".closelightbox").click(function(){
// 		$(".box").css("display","none");
// 	});
	
// });

//memedit.php 變更密碼收合收合
$(function(){
	$(".openpsw").click(function(){
		$(this).prev('.psw').slideDown(1000);
		$(this).hide();
	});
});

//memcomment.php 留言板收合
$(function(){
	$(".msg").click(function(){
		//找到這個msg裡面的reply
		$(this).children('.reply').slideToggle(1000);
		//$(this).children('.reply')也可以寫成$(this).find('.reply')，但children()在此的用法更為恰當
	});
});

//下面這個語法對，但不會收合，可能瀏覽器不認為reply是msg的第6個孩子
// $(function(){
// 	$(".msg").click(function(){
// 		if($('this :nth-child(6)').hasClass('reply')){
// 			$('this .reply').slideToggle(1000);
// 		}
// 	});
// });


//輸入錯誤手機時停止傳送
// function check(){
// 	if(document.getElementBtId("MEM_PHONE").validity.valid){
// 		return true;
// 	}else{
// 		alert("手機輸入錯誤")
// 		return false;
// 	}
// }


// $('.msg').appendChild('div');