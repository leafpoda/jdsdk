<?php
class LogisticsO2oSkuStockOwnerUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.o2o.sku.stockOwner.update";
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
                                    	                        	                   			private $spuId;
    	                                                            
	public function setSpuId($spuId){
		$this->spuId = $spuId;
         $this->apiParas["spu_id"] = $spuId;
	}

	public function getSpuId(){
	  return $this->spuId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["sku_id"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                                                                                                                                                                                                                              private $name;
                              public function setName($name ){
                 $this->name=$name;
                 $this->apiParas["name"] = $name;
              }

              public function getName(){
              	return $this->name;
              }
                                                                                                                                        	                   			private $stockOwner;
    	                                                            
	public function setStockOwner($stockOwner){
		$this->stockOwner = $stockOwner;
         $this->apiParas["stock_owner"] = $stockOwner;
	}

	public function getStockOwner(){
	  return $this->stockOwner;
	}

}





        
 

