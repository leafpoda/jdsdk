<?php
class KplOpenKeplerCartAddskustocartRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.kepler.cart.addskustocart";
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
    private  $commlist;

    public function setCommlist($commlist){
        $this->apiParas['commlist'] = $commlist;
    }
    public function getCommlist(){
        return $this->apiParas['commlist'];
    }
    private  $ybcommlist;

    public function setYbcommlist($ybcommlist){
        $this->apiParas['ybcommlist'] = $ybcommlist;
    }
    public function getYbcommlist(){
        return $this->apiParas['ybcommlist'];
    }
    private  $userid;

    public function setUserid($userid){
        $this->apiParas['userid'] = $userid;
    }
    public function getUserid(){
        return $this->apiParas['userid'];
    }
    private  $locationid;

    public function setLocationid($locationid){
        $this->apiParas['locationid'] = $locationid;
    }
    public function getLocationid(){
        return $this->apiParas['locationid'];
    }
    private  $type;

    public function setType($type){
        $this->apiParas['type'] = $type;
    }
    public function getType(){
        return $this->apiParas['type'];
    }
    private  $needCovert;

    public function setNeedCovert($needCovert){
        $this->apiParas['needCovert'] = $needCovert;
    }
    public function getNeedCovert(){
        return $this->apiParas['needCovert'];
    }
}

?>