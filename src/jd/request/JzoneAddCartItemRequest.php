<?php
class JzoneAddCartItemRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jzone.addCartItem";
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
                                    	                        	                   			private $activityId;
    	                        
	public function setActivityId($activityId){
		$this->activityId = $activityId;
         $this->apiParas["activityId"] = $activityId;
	}

	public function getActivityId(){
	  return $this->activityId;
	}

                        	                   			private $encryptOpenId;
    	                        
	public function setEncryptOpenId($encryptOpenId){
		$this->encryptOpenId = $encryptOpenId;
         $this->apiParas["encryptOpenId"] = $encryptOpenId;
	}

	public function getEncryptOpenId(){
	  return $this->encryptOpenId;
	}

                                            		                                    	                   			private $itemId;
    	                        
	public function setItemId($itemId){
		$this->itemId = $itemId;
         $this->apiParas["itemId"] = $itemId;
	}

	public function getItemId(){
	  return $this->itemId;
	}

                        	                   			private $num;
    	                        
	public function setNum($num){
		$this->num = $num;
         $this->apiParas["num"] = $num;
	}

	public function getNum(){
	  return $this->num;
	}

                            }





        
 

