<?php
class JointQueryActivitySkuListRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.joint.queryActivitySkuList";
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
    private  $queryDto;

    public function setQueryDto($queryDto){
        $this->apiParas['queryDto'] = $queryDto;
    }
    public function getQueryDto(){
        return $this->apiParas['queryDto'];
    }
    private  $openApiSysDto;

    public function setOpenApiSysDto($openApiSysDto){
        $this->apiParas['openApiSysDto'] = $openApiSysDto;
    }
    public function getOpenApiSysDto(){
        return $this->apiParas['openApiSysDto'];
    }
}

?>