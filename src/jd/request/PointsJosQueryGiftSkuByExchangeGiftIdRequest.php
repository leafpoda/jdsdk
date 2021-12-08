<?php
class PointsJosQueryGiftSkuByExchangeGiftIdRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.points.jos.queryGiftSkuByExchangeGiftId";
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
                                                        		                                    	                   			private $giftId;
    	                        
	public function setGiftId($giftId){
		$this->giftId = $giftId;
         $this->apiParas["giftId"] = $giftId;
	}

	public function getGiftId(){
	  return $this->giftId;
	}

                        	                            }





        
 

