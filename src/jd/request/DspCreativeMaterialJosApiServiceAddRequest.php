<?php
class DspCreativeMaterialJosApiServiceAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.creative.MaterialJosApiService.add";
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

    private  $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
    private  $materialVos;

    public function setMaterialVos($materialVos){
        $this->apiParas['materialVos'] = $materialVos;
    }
    public function getMaterialVos(){
        return $this->apiParas['materialVos'];
    }
}

?>