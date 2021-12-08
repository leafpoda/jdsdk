<?php
class AllinplateChannelorderQuerystateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.allinplate.channelorder.querystate";
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
                                    	                   			private $queryChannelOrderStateReq;
    	                        
	public function setQueryChannelOrderStateReq($queryChannelOrderStateReq){
		$this->queryChannelOrderStateReq = $queryChannelOrderStateReq;
         $this->apiParas["queryChannelOrderStateReq"] = $queryChannelOrderStateReq;
	}

	public function getQueryChannelOrderStateReq(){
	  return $this->queryChannelOrderStateReq;
	}

                        	}





        
 

