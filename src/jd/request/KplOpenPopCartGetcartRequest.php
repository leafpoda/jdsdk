<?php
class KplOpenPopCartGetcartRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.pop.cart.getcart";
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
    private  $locationid;

    public function setLocationid($locationid){
        $this->apiParas['locationid'] = $locationid;
    }
    public function getLocationid(){
        return $this->apiParas['locationid'];
    }
    private  $skuList;

    public function setSkuList($skuList){
        $this->apiParas['skuList'] = $skuList;
    }
    public function getSkuList(){
        return $this->apiParas['skuList'];
    }
    private  $suitsList;

    public function setSuitsList($suitsList){
        $this->apiParas['suitsList'] = $suitsList;
    }
    public function getSuitsList(){
        return $this->apiParas['suitsList'];
    }
    private  $manJianList;

    public function setManJianList($manJianList){
        $this->apiParas['manJianList'] = $manJianList;
    }
    public function getManJianList(){
        return $this->apiParas['manJianList'];
    }
    private  $manZengList;

    public function setManZengList($manZengList){
        $this->apiParas['manZengList'] = $manZengList;
    }
    public function getManZengList(){
        return $this->apiParas['manZengList'];
    }
}

?>