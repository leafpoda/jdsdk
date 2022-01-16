<?php
class HuishouVenderPhoneCreateRecyleOrderReturnContactInfoRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.huishou.vender.phone.createRecyleOrderReturnContactInfo";
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
                                                        		                                    	                   			private $serverTime;
    	                        
	public function setServerTime($serverTime){
		$this->serverTime = $serverTime;
         $this->apiParas["serverTime"] = $serverTime;
	}

	public function getServerTime(){
	  return $this->serverTime;
	}

                        	                   			private $oid;
    	                        
	public function setOid($oid){
		$this->oid = $oid;
         $this->apiParas["oid"] = $oid;
	}

	public function getOid(){
	  return $this->oid;
	}

                        	                   			private $venderOrderId;
    	                        
	public function setVenderOrderId($venderOrderId){
		$this->venderOrderId = $venderOrderId;
         $this->apiParas["venderOrderId"] = $venderOrderId;
	}

	public function getVenderOrderId(){
	  return $this->venderOrderId;
	}

                                                    	}





        
 

