<?php
class AdsDspRtbAreaQueryV2Request
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.area.query.v2";
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
    private  $system;

    public function setSystem($system){
        $this->apiParas['system'] = $system;
    }
    public function getSystem(){
        return $this->apiParas['system'];
    }
}

?>