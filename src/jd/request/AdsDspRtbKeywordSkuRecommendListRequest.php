<?php
class AdsDspRtbKeywordSkuRecommendListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.keyword.sku.recommend.list";
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
                                                        		                                    	                   			private $adGroupId;
    	                        
	public function setAdGroupId($adGroupId){
		$this->adGroupId = $adGroupId;
         $this->apiParas["adGroupId"] = $adGroupId;
	}

	public function getAdGroupId(){
	  return $this->adGroupId;
	}

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $devType;
    	                        
	public function setDevType($devType){
		$this->devType = $devType;
         $this->apiParas["devType"] = $devType;
	}

	public function getDevType(){
	  return $this->devType;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $adKeywordTypes;
                              public function setAdKeywordTypes($adKeywordTypes ){
                 $this->adKeywordTypes=$adKeywordTypes;
                 $this->apiParas["adKeywordTypes"] = $adKeywordTypes;
              }

              public function getAdKeywordTypes(){
              	return $this->adKeywordTypes;
              }
                                                                                                                                                                                        		                                    	                        	                        	                        	                            }





        
 

