<?php
class SellerPromotionAppendPromoUsersRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.seller.promotion.appendPromoUsers";
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
                                                        		                                    	                        	                        	                   			private $ip;
    	                        
	public function setIp($ip){
		$this->ip = $ip;
         $this->apiParas["ip"] = $ip;
	}

	public function getIp(){
	  return $this->ip;
	}

                        	                   			private $port;
    	                        
	public function setPort($port){
		$this->port = $port;
         $this->apiParas["port"] = $port;
	}

	public function getPort(){
	  return $this->port;
	}

                        	                   			private $requestId;
    	                                                            
	public function setRequestId($requestId){
		$this->requestId = $requestId;
         $this->apiParas["request_id"] = $requestId;
	}

	public function getRequestId(){
	  return $this->requestId;
	}

                        	                        	                                                    	                        	                   			private $promoId;
    	                        
	public function setPromoId($promoId){
		$this->promoId = $promoId;
         $this->apiParas["promoId"] = $promoId;
	}

	public function getPromoId(){
	  return $this->promoId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $pin;
                              public function setPin($pin ){
                 $this->pin=$pin;
                 $this->apiParas["pin"] = $pin;
              }

              public function getPin(){
              	return $this->pin;
              }
                                                                                                                                                                                                                                                                                                                                              private $beginTime;
                              public function setBeginTime($beginTime ){
                 $this->beginTime=$beginTime;
                 $this->apiParas["beginTime"] = $beginTime;
              }

              public function getBeginTime(){
              	return $this->beginTime;
              }
                                                                                                                                                                                                                                                                                                                                              private $endTime;
                              public function setEndTime($endTime ){
                 $this->endTime=$endTime;
                 $this->apiParas["endTime"] = $endTime;
              }

              public function getEndTime(){
              	return $this->endTime;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $openIdBuyer;
                              public function setOpenIdBuyer($openIdBuyer ){
                 $this->openIdBuyer=$openIdBuyer;
                 $this->apiParas["open_id_buyer"] = $openIdBuyer;
              }

              public function getOpenIdBuyer(){
              	return $this->openIdBuyer;
              }
                                                                                                                }





        
 

