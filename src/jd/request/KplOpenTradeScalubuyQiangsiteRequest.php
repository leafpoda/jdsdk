<?php
class KplOpenTradeScalubuyQiangsiteRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.trade.scalubuy.qiangsite";
	}
	
	public function getApiParas(){
        if(empty($this->apiParas)){
	        return "{}";
	    }
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
    public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
    private  $qiangSiteReq;

    public function setQiangSiteReq($qiangSiteReq){
        $this->apiParas['qiangSiteReq'] = $qiangSiteReq;
    }
    public function getQiangSiteReq(){
        return $this->apiParas['qiangSiteReq'];
    }
}

?>