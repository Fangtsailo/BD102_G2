//開啟密碼光箱
$(function(){

	$(".openlightbox").click(function(){
		$(".box").css("display","block");
	});

	$(".closelightbox").click(function(){
		$(".box").css("display","none");
	});
	
});


//留言板收合
$(function(){
	$(".msg").click(function(){
		$('.reply').slideToggle(1000);
	});
});

//輸入錯誤手機時停止傳送
function check(){
	if(document.getElementBtId("MEM_PHONE").validity.valid){
		return true;
	}else{
		alert("手機輸入錯誤")
		return false;
	}
}