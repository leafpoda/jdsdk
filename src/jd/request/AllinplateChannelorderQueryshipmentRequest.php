<?php
class AllinplateChannelorderQueryshipmentRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.allinplate.channelorder.queryshipment";
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
                                    	                   			private $queryChannelOrderShipmentNoReq;
    	                        
	public function setQueryChannelOrderShipmentNoReq($queryChannelOrderShipmentNoReq){
		$this->queryChannelOrderShipmentNoReq = $queryChannelOrderShipmentNoReq;
         $this->apiParas["queryChannelOrderShipmentNoReq"] = $queryChannelOrderShipmentNoReq;
	}

	public function getQueryChannelOrderShipmentNoReq(){
	  return $this->queryChannelOrderShipmentNoReq;
	}

                        	}





        
 

