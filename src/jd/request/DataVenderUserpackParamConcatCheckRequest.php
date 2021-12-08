<?php
class DataVenderUserpackParamConcatCheckRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.userpack.param.concat.check";
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
                                    	                   			private $webLinks;
    	                                                            
	public function setWebLinks($webLinks){
		$this->webLinks = $webLinks;
         $this->apiParas["web_links"] = $webLinks;
	}

	public function getWebLinks(){
	  return $this->webLinks;
	}

}





        
 

