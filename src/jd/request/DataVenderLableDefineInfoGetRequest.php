<?php
class DataVenderLableDefineInfoGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.lable.define.info.get";
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
                                    	                   			private $begroup;
    	                        
	public function setBegroup($begroup){
		$this->begroup = $begroup;
         $this->apiParas["begroup"] = $begroup;
	}

	public function getBegroup(){
	  return $this->begroup;
	}

                        	                   			private $lversion;
    	                        
	public function setLversion($lversion){
		$this->lversion = $lversion;
         $this->apiParas["lversion"] = $lversion;
	}

	public function getLversion(){
	  return $this->lversion;
	}

}





        
 

