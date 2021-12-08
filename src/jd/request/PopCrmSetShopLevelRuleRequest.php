<?php
class PopCrmSetShopLevelRuleRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.crm.setShopLevelRule";
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
                                    	                                                 	                        	                                                                                                                                                                                                                                                                                                               private $customerLevelName;
                              public function setCustomerLevelName($customerLevelName ){
                 $this->customerLevelName=$customerLevelName;
                 $this->apiParas["customerLevelName"] = $customerLevelName;
              }

              public function getCustomerLevelName(){
              	return $this->customerLevelName;
              }
                                                                                                                }





        
 

