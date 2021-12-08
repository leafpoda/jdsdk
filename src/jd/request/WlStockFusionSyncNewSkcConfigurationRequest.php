<?php
class WlStockFusionSyncNewSkcConfigurationRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.wl.stock.fusion.syncNewSkcConfiguration";
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
                                                             	                        	                                                                                                                                                                                                                                                                                        private $deptName;
                              public function setDeptName($deptName ){
                 $this->deptName=$deptName;
                 $this->apiParas["deptName"] = $deptName;
              }

              public function getDeptName(){
              	return $this->deptName;
              }
                                                                                                                                                                                                                                                                                                                       private $brandName;
                              public function setBrandName($brandName ){
                 $this->brandName=$brandName;
                 $this->apiParas["brandName"] = $brandName;
              }

              public function getBrandName(){
              	return $this->brandName;
              }
                                                                                                                                                                                                                                                                                                                       private $colorNames;
                              public function setColorNames($colorNames ){
                 $this->colorNames=$colorNames;
                 $this->apiParas["colorNames"] = $colorNames;
              }

              public function getColorNames(){
              	return $this->colorNames;
              }
                                                                                                                                                                                                                                                                                                                       private $sellerName;
                              public function setSellerName($sellerName ){
                 $this->sellerName=$sellerName;
                 $this->apiParas["sellerName"] = $sellerName;
              }

              public function getSellerName(){
              	return $this->sellerName;
              }
                                                                                                                                                                                                                                                                                                                       private $execTime;
                              public function setExecTime($execTime ){
                 $this->execTime=$execTime;
                 $this->apiParas["execTime"] = $execTime;
              }

              public function getExecTime(){
              	return $this->execTime;
              }
                                                                                                                                                                                                                                                                                                                       private $sellerNo;
                              public function setSellerNo($sellerNo ){
                 $this->sellerNo=$sellerNo;
                 $this->apiParas["sellerNo"] = $sellerNo;
              }

              public function getSellerNo(){
              	return $this->sellerNo;
              }
                                                                                                                                                                                                                                                                                                                       private $filialeNames;
                              public function setFilialeNames($filialeNames ){
                 $this->filialeNames=$filialeNames;
                 $this->apiParas["filialeNames"] = $filialeNames;
              }

              public function getFilialeNames(){
              	return $this->filialeNames;
              }
                                                                                                                                                                                                                                                                                                                       private $styleName;
                              public function setStyleName($styleName ){
                 $this->styleName=$styleName;
                 $this->apiParas["styleName"] = $styleName;
              }

              public function getStyleName(){
              	return $this->styleName;
              }
                                                                                                                                                                                                                                                                                                                       private $deptNo;
                              public function setDeptNo($deptNo ){
                 $this->deptNo=$deptNo;
                 $this->apiParas["deptNo"] = $deptNo;
              }

              public function getDeptNo(){
              	return $this->deptNo;
              }
                                                                                                                                                                                                                                                                                                                       private $filialeNos;
                              public function setFilialeNos($filialeNos ){
                 $this->filialeNos=$filialeNos;
                 $this->apiParas["filialeNos"] = $filialeNos;
              }

              public function getFilialeNos(){
              	return $this->filialeNos;
              }
                                                                                                                                                                                                                                                                                                                       private $strategy;
                              public function setStrategy($strategy ){
                 $this->strategy=$strategy;
                 $this->apiParas["strategy"] = $strategy;
              }

              public function getStrategy(){
              	return $this->strategy;
              }
                                                                                                                                                                                                                                                                                                                       private $storeNos;
                              public function setStoreNos($storeNos ){
                 $this->storeNos=$storeNos;
                 $this->apiParas["storeNos"] = $storeNos;
              }

              public function getStoreNos(){
              	return $this->storeNos;
              }
                                                                                                                                                                                                                                                                                                                       private $brandNo;
                              public function setBrandNo($brandNo ){
                 $this->brandNo=$brandNo;
                 $this->apiParas["brandNo"] = $brandNo;
              }

              public function getBrandNo(){
              	return $this->brandNo;
              }
                                                                                                                }





        
 

