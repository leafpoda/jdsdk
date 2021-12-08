<?php
class AdsDspRtbTpAddAdRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.tp.addAd";
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

                        	                   			private $customTitle;
    	                        
	public function setCustomTitle($customTitle){
		$this->customTitle = $customTitle;
         $this->apiParas["customTitle"] = $customTitle;
	}

	public function getCustomTitle(){
	  return $this->customTitle;
	}

                        	                   			private $imgUrl;
    	                        
	public function setImgUrl($imgUrl){
		$this->imgUrl = $imgUrl;
         $this->apiParas["imgUrl"] = $imgUrl;
	}

	public function getImgUrl(){
	  return $this->imgUrl;
	}

                                                                        		                                    	                        	                        	                        	                            }





        
 

