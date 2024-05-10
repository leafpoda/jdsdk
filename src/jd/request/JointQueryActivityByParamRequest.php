<?php
class JointQueryActivityByParamRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.joint.queryActivityByParam";
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
    private  $jointActivitySecVo;

    public function setJointActivitySecVo($jointActivitySecVo){
        $this->apiParas['jointActivitySecVo'] = $jointActivitySecVo;
    }
    public function getJointActivitySecVo(){
        return $this->apiParas['jointActivitySecVo'];
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