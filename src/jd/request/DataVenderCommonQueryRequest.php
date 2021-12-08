<?php
class DataVenderCommonQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.common.query";
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
                                    	                   			private $method;
    	                        
	public function setMethod($method){
		$this->method = $method;
         $this->apiParas["method"] = $method;
	}

	public function getMethod(){
	  return $this->method;
	}

                        	                   			private $inputPara;
    	                                                            
	public function setInputPara($inputPara){
		$this->inputPara = $inputPara;
         $this->apiParas["input_para"] = $inputPara;
	}

	public function getInputPara(){
	  return $this->inputPara;
	}

                        	                        	}





        
 

