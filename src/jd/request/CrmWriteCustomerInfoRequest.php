<?php
class CrmWriteCustomerInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.crm.writeCustomerInfo";
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
                                                        		                                    	                        	                   			private $linkUrl;
    	                        
	public function setLinkUrl($linkUrl){
		$this->linkUrl = $linkUrl;
         $this->apiParas["linkUrl"] = $linkUrl;
	}

	public function getLinkUrl(){
	  return $this->linkUrl;
	}

                        	                            }





        
 

