<?php
class FollowVenderReadQueryAmountOfFollowersRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.follow.vender.read.queryAmountOfFollowers";
	}
	
	public function getApiParas(){
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
                                    	                        	                   	                    		private $shopIds;
    	                        
	public function setShopIds($shopIds){
		$this->shopIds = $shopIds;
         $this->apiParas["shopIds"] = $shopIds;
	}

	public function getShopIds(){
	  return $this->shopIds;
	}

}





        
 

