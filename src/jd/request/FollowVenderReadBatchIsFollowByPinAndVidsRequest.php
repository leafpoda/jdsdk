<?php
class FollowVenderReadBatchIsFollowByPinAndVidsRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.follow.vender.read.batchIsFollowByPinAndVids";
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
                                    	                        	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $v1;
                              public function setV1($v1 ){
                 $this->v1=$v1;
                 $this->apiParas["v1"] = $v1;
              }

              public function getV1(){
              	return $this->v1;
              }
                                                                                                                }





        
 

