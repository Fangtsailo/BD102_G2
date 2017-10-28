<?php 
class Message {
	public $no = 0;
	public $memberName = "";
	public $memberPicName = "";
	public $dateStamp = 0;
	public $content = "";
	public $dateStr = "";
	public $isReportByMe = false;//這筆留言有沒有被我檢舉過

	function __construct($no=0, $memberName="使用者", $dateStamp=1508501792, $content="", $memberPicName="") {
		$this->no = $no;
		$this->memberName = $memberName;
		$this->dateStamp = $dateStamp;
		$this->content = $content;
		$this->memberPicName = GLOBAL_MEM_PIC_PATH.$memberPicName;
		$this->dateStr = date("Y/m/d H:i", $dateStamp);
	}
}

 ?>