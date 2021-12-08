<?php
class SellerPromotionCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.seller.promotion.create";
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
                                                        		                                    	                        	                        	                   			private $ip;
    	                        
	public function setIp($ip){
		$this->ip = $ip;
         $this->apiParas["ip"] = $ip;
	}

	public function getIp(){
	  return $this->ip;
	}

                        	                   			private $port;
    	                        
	public function setPort($port){
		$this->port = $port;
         $this->apiParas["port"] = $port;
	}

	public function getPort(){
	  return $this->port;
	}

                        	                   			private $requestId;
    	                                                            
	public function setRequestId($requestId){
		$this->requestId = $requestId;
         $this->apiParas["request_id"] = $requestId;
	}

	public function getRequestId(){
	  return $this->requestId;
	}

                        	                                                                        		                                                        		                                    	                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $beginTime;
    	                        
	public function setBeginTime($beginTime){
		$this->beginTime = $beginTime;
         $this->apiParas["beginTime"] = $beginTime;
	}

	public function getBeginTime(){
	  return $this->beginTime;
	}

                        	                   			private $endTime;
    	                        
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $bound;
    	                        
	public function setBound($bound){
		$this->bound = $bound;
         $this->apiParas["bound"] = $bound;
	}

	public function getBound(){
	  return $this->bound;
	}

                        	                   			private $member;
    	                        
	public function setMember($member){
		$this->member = $member;
         $this->apiParas["member"] = $member;
	}

	public function getMember(){
	  return $this->member;
	}

                        	                   			private $slogan;
    	                        
	public function setSlogan($slogan){
		$this->slogan = $slogan;
         $this->apiParas["slogan"] = $slogan;
	}

	public function getSlogan(){
	  return $this->slogan;
	}

                        	                   			private $comment;
    	                        
	public function setComment($comment){
		$this->comment = $comment;
         $this->apiParas["comment"] = $comment;
	}

	public function getComment(){
	  return $this->comment;
	}

                        	                   			private $platform;
    	                        
	public function setPlatform($platform){
		$this->platform = $platform;
         $this->apiParas["platform"] = $platform;
	}

	public function getPlatform(){
	  return $this->platform;
	}

                        	                   			private $favorMode;
    	                        
	public function setFavorMode($favorMode){
		$this->favorMode = $favorMode;
         $this->apiParas["favorMode"] = $favorMode;
	}

	public function getFavorMode(){
	  return $this->favorMode;
	}

                        	                   			private $shopMember;
    	                        
	public function setShopMember($shopMember){
		$this->shopMember = $shopMember;
         $this->apiParas["shopMember"] = $shopMember;
	}

	public function getShopMember(){
	  return $this->shopMember;
	}

                        	                   			private $qqMember;
    	                        
	public function setQqMember($qqMember){
		$this->qqMember = $qqMember;
         $this->apiParas["qqMember"] = $qqMember;
	}

	public function getQqMember(){
	  return $this->qqMember;
	}

                        	                   			private $plusMember;
    	                        
	public function setPlusMember($plusMember){
		$this->plusMember = $plusMember;
         $this->apiParas["plusMember"] = $plusMember;
	}

	public function getPlusMember(){
	  return $this->plusMember;
	}

                        	                   			private $samMember;
    	                        
	public function setSamMember($samMember){
		$this->samMember = $samMember;
         $this->apiParas["samMember"] = $samMember;
	}

	public function getSamMember(){
	  return $this->samMember;
	}

                        	                   			private $tokenId;
    	                        
	public function setTokenId($tokenId){
		$this->tokenId = $tokenId;
         $this->apiParas["tokenId"] = $tokenId;
	}

	public function getTokenId(){
	  return $this->tokenId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $promoChannel;
                              public function setPromoChannel($promoChannel ){
                 $this->promoChannel=$promoChannel;
                 $this->apiParas["promoChannel"] = $promoChannel;
              }

              public function getPromoChannel(){
              	return $this->promoChannel;
              }
                                                                                                                                        	                   			private $memberLevelOnly;
    	                        
	public function setMemberLevelOnly($memberLevelOnly){
		$this->memberLevelOnly = $memberLevelOnly;
         $this->apiParas["memberLevelOnly"] = $memberLevelOnly;
	}

	public function getMemberLevelOnly(){
	  return $this->memberLevelOnly;
	}

                        	                   			private $tokenUseNum;
    	                        
	public function setTokenUseNum($tokenUseNum){
		$this->tokenUseNum = $tokenUseNum;
         $this->apiParas["tokenUseNum"] = $tokenUseNum;
	}

	public function getTokenUseNum(){
	  return $this->tokenUseNum;
	}

                        	                   			private $allowOthersOperate;
    	                        
	public function setAllowOthersOperate($allowOthersOperate){
		$this->allowOthersOperate = $allowOthersOperate;
         $this->apiParas["allowOthersOperate"] = $allowOthersOperate;
	}

	public function getAllowOthersOperate(){
	  return $this->allowOthersOperate;
	}

                        	                   			private $allowOthersCheck;
    	                        
	public function setAllowOthersCheck($allowOthersCheck){
		$this->allowOthersCheck = $allowOthersCheck;
         $this->apiParas["allowOthersCheck"] = $allowOthersCheck;
	}

	public function getAllowOthersCheck(){
	  return $this->allowOthersCheck;
	}

                        	                   			private $allowOtherUserOperate;
    	                        
	public function setAllowOtherUserOperate($allowOtherUserOperate){
		$this->allowOtherUserOperate = $allowOtherUserOperate;
         $this->apiParas["allowOtherUserOperate"] = $allowOtherUserOperate;
	}

	public function getAllowOtherUserOperate(){
	  return $this->allowOtherUserOperate;
	}

                        	                   			private $allowOtherUserCheck;
    	                        
	public function setAllowOtherUserCheck($allowOtherUserCheck){
		$this->allowOtherUserCheck = $allowOtherUserCheck;
         $this->apiParas["allowOtherUserCheck"] = $allowOtherUserCheck;
	}

	public function getAllowOtherUserCheck(){
	  return $this->allowOtherUserCheck;
	}

                        	                   			private $needManualCheck;
    	                        
	public function setNeedManualCheck($needManualCheck){
		$this->needManualCheck = $needManualCheck;
         $this->apiParas["needManualCheck"] = $needManualCheck;
	}

	public function getNeedManualCheck(){
	  return $this->needManualCheck;
	}

                        	                   			private $previewsId;
    	                        
	public function setPreviewsId($previewsId){
		$this->previewsId = $previewsId;
         $this->apiParas["previewsId"] = $previewsId;
	}

	public function getPreviewsId(){
	  return $this->previewsId;
	}

                        	                   			private $previewsContent;
    	                        
	public function setPreviewsContent($previewsContent){
		$this->previewsContent = $previewsContent;
         $this->apiParas["previewsContent"] = $previewsContent;
	}

	public function getPreviewsContent(){
	  return $this->previewsContent;
	}

                        	                   			private $previewsTime;
    	                        
	public function setPreviewsTime($previewsTime){
		$this->previewsTime = $previewsTime;
         $this->apiParas["previewsTime"] = $previewsTime;
	}

	public function getPreviewsTime(){
	  return $this->previewsTime;
	}

                        	                   			private $skuIconId;
    	                        
	public function setSkuIconId($skuIconId){
		$this->skuIconId = $skuIconId;
         $this->apiParas["skuIconId"] = $skuIconId;
	}

	public function getSkuIconId(){
	  return $this->skuIconId;
	}

                        	                   			private $skuIconShowTime;
    	                        
	public function setSkuIconShowTime($skuIconShowTime){
		$this->skuIconShowTime = $skuIconShowTime;
         $this->apiParas["skuIconShowTime"] = $skuIconShowTime;
	}

	public function getSkuIconShowTime(){
	  return $this->skuIconShowTime;
	}

                        	                   			private $promoAreaType;
    	                        
	public function setPromoAreaType($promoAreaType){
		$this->promoAreaType = $promoAreaType;
         $this->apiParas["promoAreaType"] = $promoAreaType;
	}

	public function getPromoAreaType(){
	  return $this->promoAreaType;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $promoArea;
                              public function setPromoArea($promoArea ){
                 $this->promoArea=$promoArea;
                 $this->apiParas["promoArea"] = $promoArea;
              }

              public function getPromoArea(){
              	return $this->promoArea;
              }
                                                                                                                                        	                   			private $showTokenPrice;
    	                        
	public function setShowTokenPrice($showTokenPrice){
		$this->showTokenPrice = $showTokenPrice;
         $this->apiParas["showTokenPrice"] = $showTokenPrice;
	}

	public function getShowTokenPrice(){
	  return $this->showTokenPrice;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["skuId"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                                                                                                                                                                                                                              private $bindType;
                              public function setBindType($bindType ){
                 $this->bindType=$bindType;
                 $this->apiParas["bindType"] = $bindType;
              }

              public function getBindType(){
              	return $this->bindType;
              }
                                                                                                                                                                                                                                                                                                                                              private $promoPrice;
                              public function setPromoPrice($promoPrice ){
                 $this->promoPrice=$promoPrice;
                 $this->apiParas["promoPrice"] = $promoPrice;
              }

              public function getPromoPrice(){
              	return $this->promoPrice;
              }
                                                                                                                                                                                                                                                                                                                                              private $num;
                              public function setNum($num ){
                 $this->num=$num;
                 $this->apiParas["num"] = $num;
              }

              public function getNum(){
              	return $this->num;
              }
                                                                                                                                                                                                                                                                                                                                              private $wareId;
                              public function setWareId($wareId ){
                 $this->wareId=$wareId;
                 $this->apiParas["wareId"] = $wareId;
              }

              public function getWareId(){
              	return $this->wareId;
              }
                                                                                                                                                                                                                                                                                                                                              private $skuName;
                              public function setSkuName($skuName ){
                 $this->skuName=$skuName;
                 $this->apiParas["skuName"] = $skuName;
              }

              public function getSkuName(){
              	return $this->skuName;
              }
                                                                                                                                                                                                                                                                                                                                              private $jdPrice;
                              public function setJdPrice($jdPrice ){
                 $this->jdPrice=$jdPrice;
                 $this->apiParas["jdPrice"] = $jdPrice;
              }

              public function getJdPrice(){
              	return $this->jdPrice;
              }
                                                                                                                                                                                                                                                                                                                                              private $itemNum;
                              public function setItemNum($itemNum ){
                 $this->itemNum=$itemNum;
                 $this->apiParas["itemNum"] = $itemNum;
              }

              public function getItemNum(){
              	return $this->itemNum;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                                               private $type;
                              public function setType($type ){
                 $this->type=$type;
                 $this->apiParas["type"] = $type;
              }

              public function getType(){
              	return $this->type;
              }
                                                                                                                                                                                                                                                                                                                                              private $propsNum;
                              public function setPropsNum($propsNum ){
                 $this->propsNum=$propsNum;
                 $this->apiParas["propsNum"] = $propsNum;
              }

              public function getPropsNum(){
              	return $this->propsNum;
              }
                                                                                                                                                                                                                                                                                                                                              private $usedWay;
                              public function setUsedWay($usedWay ){
                 $this->usedWay=$usedWay;
                 $this->apiParas["usedWay"] = $usedWay;
              }

              public function getUsedWay(){
              	return $this->usedWay;
              }
                                                                                                                                                                                                                                                                                                                                              private $couponValidDays;
                              public function setCouponValidDays($couponValidDays ){
                 $this->couponValidDays=$couponValidDays;
                 $this->apiParas["couponValidDays"] = $couponValidDays;
              }

              public function getCouponValidDays(){
              	return $this->couponValidDays;
              }
                                                                                                                                                            		                                    	                   			private $freqBound;
    	                        
	public function setFreqBound($freqBound){
		$this->freqBound = $freqBound;
         $this->apiParas["freqBound"] = $freqBound;
	}

	public function getFreqBound(){
	  return $this->freqBound;
	}

                        	                   			private $perMaxNum;
    	                        
	public function setPerMaxNum($perMaxNum){
		$this->perMaxNum = $perMaxNum;
         $this->apiParas["perMaxNum"] = $perMaxNum;
	}

	public function getPerMaxNum(){
	  return $this->perMaxNum;
	}

                        	                   			private $perMinNum;
    	                        
	public function setPerMinNum($perMinNum){
		$this->perMinNum = $perMinNum;
         $this->apiParas["perMinNum"] = $perMinNum;
	}

	public function getPerMinNum(){
	  return $this->perMinNum;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $pin;
                              public function setPin($pin ){
                 $this->pin=$pin;
                 $this->apiParas["pin"] = $pin;
              }

              public function getPin(){
              	return $this->pin;
              }
                                                                                                                                                                                                                                                                                                                                              private $useBeginTime;
                              public function setUseBeginTime($useBeginTime ){
                 $this->useBeginTime=$useBeginTime;
                 $this->apiParas["useBeginTime"] = $useBeginTime;
              }

              public function getUseBeginTime(){
              	return $this->useBeginTime;
              }
                                                                                                                                                                                                                                                                                                                                              private $useEndTime;
                              public function setUseEndTime($useEndTime ){
                 $this->useEndTime=$useEndTime;
                 $this->apiParas["useEndTime"] = $useEndTime;
              }

              public function getUseEndTime(){
              	return $this->useEndTime;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $openIdBuyer;
                              public function setOpenIdBuyer($openIdBuyer ){
                 $this->openIdBuyer=$openIdBuyer;
                 $this->apiParas["open_id_buyer"] = $openIdBuyer;
              }

              public function getOpenIdBuyer(){
              	return $this->openIdBuyer;
              }
                                                                                                                                            }





        
 

