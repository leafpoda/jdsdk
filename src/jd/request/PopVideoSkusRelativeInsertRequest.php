<?php
class PopVideoSkusRelativeInsertRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.video.skus.relative.insert";
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
                                    	                        	                   			private $videoId;
    	                        
	public function setVideoId($videoId){
		$this->videoId = $videoId;
         $this->apiParas["videoId"] = $videoId;
	}

	public function getVideoId(){
	  return $this->videoId;
	}

                        	                   			private $productInfoArray;
    	                                                                        
	public function setProductInfoArray($productInfoArray){
		$this->productInfoArray = $productInfoArray;
         $this->apiParas["product_info_array"] = $productInfoArray;
	}

	public function getProductInfoArray(){
	  return $this->productInfoArray;
	}

                                            		                                    	                        	                        	                        	                            }





        
 

