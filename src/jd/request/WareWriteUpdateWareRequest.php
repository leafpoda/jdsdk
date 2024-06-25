<?php
class WareWriteUpdateWareRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.write.updateWare";
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
                                                        		                                    	                        	                        	                                                                        		                                    	                   			private $wareId;
    	                        
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["wareId"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                   			private $title;
    	                        
	public function setTitle($title){
		$this->title = $title;
         $this->apiParas["title"] = $title;
	}

	public function getTitle(){
	  return $this->title;
	}

                        	                        	                   			private $brandId;
    	                        
	public function setBrandId($brandId){
		$this->brandId = $brandId;
         $this->apiParas["brandId"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
	}

                        	                   			private $templateId;
    	                        
	public function setTemplateId($templateId){
		$this->templateId = $templateId;
         $this->apiParas["templateId"] = $templateId;
	}

	public function getTemplateId(){
	  return $this->templateId;
	}

                        	                   			private $transportId;
    	                        
	public function setTransportId($transportId){
		$this->transportId = $transportId;
         $this->apiParas["transportId"] = $transportId;
	}

	public function getTransportId(){
	  return $this->transportId;
	}

                        	                   			private $wareStatus;
    	                        
	public function setWareStatus($wareStatus){
		$this->wareStatus = $wareStatus;
         $this->apiParas["wareStatus"] = $wareStatus;
	}

	public function getWareStatus(){
	  return $this->wareStatus;
	}

                        	                   			private $outerId;
    	                        
	public function setOuterId($outerId){
		$this->outerId = $outerId;
         $this->apiParas["outerId"] = $outerId;
	}

	public function getOuterId(){
	  return $this->outerId;
	}

                        	                   			private $itemNum;
    	                        
	public function setItemNum($itemNum){
		$this->itemNum = $itemNum;
         $this->apiParas["itemNum"] = $itemNum;
	}

	public function getItemNum(){
	  return $this->itemNum;
	}

                        	                   			private $barCode;
    	                        
	public function setBarCode($barCode){
		$this->barCode = $barCode;
         $this->apiParas["barCode"] = $barCode;
	}

	public function getBarCode(){
	  return $this->barCode;
	}

                        	                   			private $wareLocation;
    	                        
	public function setWareLocation($wareLocation){
		$this->wareLocation = $wareLocation;
         $this->apiParas["wareLocation"] = $wareLocation;
	}

	public function getWareLocation(){
	  return $this->wareLocation;
	}

                        	                   			private $delivery;
    	                        
	public function setDelivery($delivery){
		$this->delivery = $delivery;
         $this->apiParas["delivery"] = $delivery;
	}

	public function getDelivery(){
	  return $this->delivery;
	}

                        	                   			private $promiseId;
    	                        
	public function setPromiseId($promiseId){
		$this->promiseId = $promiseId;
         $this->apiParas["promiseId"] = $promiseId;
	}

	public function getPromiseId(){
	  return $this->promiseId;
	}

                                            		                                    	                   			private $url;
    	                        
	public function setUrl($url){
		$this->url = $url;
         $this->apiParas["url"] = $url;
	}

	public function getUrl(){
	  return $this->url;
	}

                        	                   			private $urlWords;
    	                        
	public function setUrlWords($urlWords){
		$this->urlWords = $urlWords;
         $this->apiParas["urlWords"] = $urlWords;
	}

	public function getUrlWords(){
	  return $this->urlWords;
	}

                        	                   			private $words;
    	                        
	public function setWords($words){
		$this->words = $words;
         $this->apiParas["words"] = $words;
	}

	public function getWords(){
	  return $this->words;
	}

                                                    	                   			private $wrap;
    	                        
	public function setWrap($wrap){
		$this->wrap = $wrap;
         $this->apiParas["wrap"] = $wrap;
	}

	public function getWrap(){
	  return $this->wrap;
	}

                        	                   			private $packListing;
    	                        
	public function setPackListing($packListing){
		$this->packListing = $packListing;
         $this->apiParas["packListing"] = $packListing;
	}

	public function getPackListing(){
	  return $this->packListing;
	}

                        	                   			private $length;
    	                        
	public function setLength($length){
		$this->length = $length;
         $this->apiParas["length"] = $length;
	}

	public function getLength(){
	  return $this->length;
	}

                        	                   			private $width;
    	                        
	public function setWidth($width){
		$this->width = $width;
         $this->apiParas["width"] = $width;
	}

	public function getWidth(){
	  return $this->width;
	}

                        	                   			private $height;
    	                        
	public function setHeight($height){
		$this->height = $height;
         $this->apiParas["height"] = $height;
	}

	public function getHeight(){
	  return $this->height;
	}

                        	                   			private $weight;
    	                        
	public function setWeight($weight){
		$this->weight = $weight;
         $this->apiParas["weight"] = $weight;
	}

	public function getWeight(){
	  return $this->weight;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $attrId;
                              public function setAttrId($attrId ){
                 $this->attrId=$attrId;
                 $this->apiParas["attrId"] = $attrId;
              }

              public function getAttrId(){
              	return $this->attrId;
              }
                                                                                                                                                                                                                                                                                                                       private $attrValues;
                              public function setAttrValues($attrValues ){
                 $this->attrValues=$attrValues;
                 $this->apiParas["attrValues"] = $attrValues;
              }

              public function getAttrValues(){
              	return $this->attrValues;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                        private $featureKey;
                              public function setFeatureKey($featureKey ){
                 $this->featureKey=$featureKey;
                 $this->apiParas["featureKey"] = $featureKey;
              }

              public function getFeatureKey(){
              	return $this->featureKey;
              }
                                                                                                                                                                                                                                                                                                                       private $featureValue;
                              public function setFeatureValue($featureValue ){
                 $this->featureValue=$featureValue;
                 $this->apiParas["featureValue"] = $featureValue;
              }

              public function getFeatureValue(){
              	return $this->featureValue;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                        private $shopCategory;
                              public function setShopCategory($shopCategory ){
                 $this->shopCategory=$shopCategory;
                 $this->apiParas["shopCategory"] = $shopCategory;
              }

              public function getShopCategory(){
              	return $this->shopCategory;
              }
                                                                                                                                        	                   			private $mobileDesc;
    	                        
	public function setMobileDesc($mobileDesc){
		$this->mobileDesc = $mobileDesc;
         $this->apiParas["mobileDesc"] = $mobileDesc;
	}

	public function getMobileDesc(){
	  return $this->mobileDesc;
	}

                        	                   			private $zhuangBaId;
    	                        
	public function setZhuangBaId($zhuangBaId){
		$this->zhuangBaId = $zhuangBaId;
         $this->apiParas["zhuangBaId"] = $zhuangBaId;
	}

	public function getZhuangBaId(){
	  return $this->zhuangBaId;
	}

                        	                   			private $introductionUseFlag;
    	                        
	public function setIntroductionUseFlag($introductionUseFlag){
		$this->introductionUseFlag = $introductionUseFlag;
         $this->apiParas["introductionUseFlag"] = $introductionUseFlag;
	}

	public function getIntroductionUseFlag(){
	  return $this->introductionUseFlag;
	}

                        	                   			private $mobileZhuangBaId;
    	                        
	public function setMobileZhuangBaId($mobileZhuangBaId){
		$this->mobileZhuangBaId = $mobileZhuangBaId;
         $this->apiParas["mobileZhuangBaId"] = $mobileZhuangBaId;
	}

	public function getMobileZhuangBaId(){
	  return $this->mobileZhuangBaId;
	}

                        	                   			private $mobileDescUseFlag;
    	                        
	public function setMobileDescUseFlag($mobileDescUseFlag){
		$this->mobileDescUseFlag = $mobileDescUseFlag;
         $this->apiParas["mobileDescUseFlag"] = $mobileDescUseFlag;
	}

	public function getMobileDescUseFlag(){
	  return $this->mobileDescUseFlag;
	}

                        	                   			private $introduction;
    	                        
	public function setIntroduction($introduction){
		$this->introduction = $introduction;
         $this->apiParas["introduction"] = $introduction;
	}

	public function getIntroduction(){
	  return $this->introduction;
	}

                        	                   			private $afterSales;
    	                        
	public function setAfterSales($afterSales){
		$this->afterSales = $afterSales;
         $this->apiParas["afterSales"] = $afterSales;
	}

	public function getAfterSales(){
	  return $this->afterSales;
	}

                        	                   			private $jdPrice;
    	                        
	public function setJdPrice($jdPrice){
		$this->jdPrice = $jdPrice;
         $this->apiParas["jdPrice"] = $jdPrice;
	}

	public function getJdPrice(){
	  return $this->jdPrice;
	}

                        	                   			private $marketPrice;
    	                        
	public function setMarketPrice($marketPrice){
		$this->marketPrice = $marketPrice;
         $this->apiParas["marketPrice"] = $marketPrice;
	}

	public function getMarketPrice(){
	  return $this->marketPrice;
	}

                        	                   			private $designConcept;
    	                        
	public function setDesignConcept($designConcept){
		$this->designConcept = $designConcept;
         $this->apiParas["designConcept"] = $designConcept;
	}

	public function getDesignConcept(){
	  return $this->designConcept;
	}

                        	                   			private $fitCaseHtmlApp;
    	                        
	public function setFitCaseHtmlApp($fitCaseHtmlApp){
		$this->fitCaseHtmlApp = $fitCaseHtmlApp;
         $this->apiParas["fitCaseHtmlApp"] = $fitCaseHtmlApp;
	}

	public function getFitCaseHtmlApp(){
	  return $this->fitCaseHtmlApp;
	}

                        	                   			private $fitCaseHtmlPc;
    	                        
	public function setFitCaseHtmlPc($fitCaseHtmlPc){
		$this->fitCaseHtmlPc = $fitCaseHtmlPc;
         $this->apiParas["fitCaseHtmlPc"] = $fitCaseHtmlPc;
	}

	public function getFitCaseHtmlPc(){
	  return $this->fitCaseHtmlPc;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $attrId;
                              public function setAttrId($attrId ){
                 $this->attrId=$attrId;
                 $this->apiParas["attrId"] = $attrId;
              }

              public function getAttrId(){
              	return $this->attrId;
              }
                                                                                                                                                                                                                                                                                                                       private $attrValues;
                              public function setAttrValues($attrValues ){
                 $this->attrValues=$attrValues;
                 $this->apiParas["attrValues"] = $attrValues;
              }

              public function getAttrValues(){
              	return $this->attrValues;
              }
                                                                                                                                                                                                                                                                                                                       private $expands;
                              public function setExpands($expands ){
                 $this->expands=$expands;
                 $this->apiParas["expands"] = $expands;
              }

              public function getExpands(){
              	return $this->expands;
              }
                                                                                                                                                                                                                                                                                                                       private $units;
                              public function setUnits($units ){
                 $this->units=$units;
                 $this->apiParas["units"] = $units;
              }

              public function getUnits(){
              	return $this->units;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                        private $specialService;
                              public function setSpecialService($specialService ){
                 $this->specialService=$specialService;
                 $this->apiParas["specialService"] = $specialService;
              }

              public function getSpecialService(){
              	return $this->specialService;
              }
                                                                                                                                        	                   			private $spuId;
    	                        
	public function setSpuId($spuId){
		$this->spuId = $spuId;
         $this->apiParas["spuId"] = $spuId;
	}

	public function getSpuId(){
	  return $this->spuId;
	}

                            }





        
 

