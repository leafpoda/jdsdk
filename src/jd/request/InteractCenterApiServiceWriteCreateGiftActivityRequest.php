<?php
class InteractCenterApiServiceWriteCreateGiftActivityRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.interact.center.api.service.write.createGiftActivity";
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
                                                        		                                    	                   			private $appName;
    	                        
	public function setAppName($appName){
		$this->appName = $appName;
         $this->apiParas["appName"] = $appName;
	}

	public function getAppName(){
	  return $this->appName;
	}

                        	                        	                        	                                                                        		                                    	                   			private $isPrize;
    	                        
	public function setIsPrize($isPrize){
		$this->isPrize = $isPrize;
         $this->apiParas["isPrize"] = $isPrize;
	}

	public function getIsPrize(){
	  return $this->isPrize;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $batchKey;
                              public function setBatchKey($batchKey ){
                 $this->batchKey=$batchKey;
                 $this->apiParas["batchKey"] = $batchKey;
              }

              public function getBatchKey(){
              	return $this->batchKey;
              }
                                                                                                                                                                                                                                                                                                                                              private $prizeStartTime;
                              public function setPrizeStartTime($prizeStartTime ){
                 $this->prizeStartTime=$prizeStartTime;
                 $this->apiParas["prizeStartTime"] = $prizeStartTime;
              }

              public function getPrizeStartTime(){
              	return $this->prizeStartTime;
              }
                                                                                                                                                                                                                                                                                                                                              private $collectTimes;
                              public function setCollectTimes($collectTimes ){
                 $this->collectTimes=$collectTimes;
                 $this->apiParas["collectTimes"] = $collectTimes;
              }

              public function getCollectTimes(){
              	return $this->collectTimes;
              }
                                                                                                                                                                                                                                                                                                                                              private $prizeType;
                              public function setPrizeType($prizeType ){
                 $this->prizeType=$prizeType;
                 $this->apiParas["prizeType"] = $prizeType;
              }

              public function getPrizeType(){
              	return $this->prizeType;
              }
                                                                                                                                                                                                                                                                                                                                              private $desc;
                              public function setDesc($desc ){
                 $this->desc=$desc;
                 $this->apiParas["desc"] = $desc;
              }

              public function getDesc(){
              	return $this->desc;
              }
                                                                                                                                                                                                                                                                                                                                              private $discount;
                              public function setDiscount($discount ){
                 $this->discount=$discount;
                 $this->apiParas["discount"] = $discount;
              }

              public function getDiscount(){
              	return $this->discount;
              }
                                                                                                                                                                                                                                                                                                                                              private $couponId;
                              public function setCouponId($couponId ){
                 $this->couponId=$couponId;
                 $this->apiParas["couponId"] = $couponId;
              }

              public function getCouponId(){
              	return $this->couponId;
              }
                                                                                                                                                                                                                                                                                                                                              private $skuIds;
                              public function setSkuIds($skuIds ){
                 $this->skuIds=$skuIds;
                 $this->apiParas["skuIds"] = $skuIds;
              }

              public function getSkuIds(){
              	return $this->skuIds;
              }
                                                                                                                                                                                                                                                                                                                                              private $sendCount;
                              public function setSendCount($sendCount ){
                 $this->sendCount=$sendCount;
                 $this->apiParas["sendCount"] = $sendCount;
              }

              public function getSendCount(){
              	return $this->sendCount;
              }
                                                                                                                                                                                                                                                                                                                                              private $prizeId;
                              public function setPrizeId($prizeId ){
                 $this->prizeId=$prizeId;
                 $this->apiParas["prizeId"] = $prizeId;
              }

              public function getPrizeId(){
              	return $this->prizeId;
              }
                                                                                                                                                                                                                                                                                                                                              private $activityId;
                              public function setActivityId($activityId ){
                 $this->activityId=$activityId;
                 $this->apiParas["activityId"] = $activityId;
              }

              public function getActivityId(){
              	return $this->activityId;
              }
                                                                                                                                                                                                                                                                                                                                              private $prizeLevel;
                              public function setPrizeLevel($prizeLevel ){
                 $this->prizeLevel=$prizeLevel;
                 $this->apiParas["prizeLevel"] = $prizeLevel;
              }

              public function getPrizeLevel(){
              	return $this->prizeLevel;
              }
                                                                                                                                                                                                                                                                                                                                              private $quota;
                              public function setQuota($quota ){
                 $this->quota=$quota;
                 $this->apiParas["quota"] = $quota;
              }

              public function getQuota(){
              	return $this->quota;
              }
                                                                                                                                                                                                                                                                                                                                              private $prizeEndTime;
                              public function setPrizeEndTime($prizeEndTime ){
                 $this->prizeEndTime=$prizeEndTime;
                 $this->apiParas["prizeEndTime"] = $prizeEndTime;
              }

              public function getPrizeEndTime(){
              	return $this->prizeEndTime;
              }
                                                                                                                                                                                                                                                                                                                                              private $validateDay;
                              public function setValidateDay($validateDay ){
                 $this->validateDay=$validateDay;
                 $this->apiParas["validateDay"] = $validateDay;
              }

              public function getValidateDay(){
              	return $this->validateDay;
              }
                                                                                                                                                                                                                                                                                                                                              private $putKey;
                              public function setPutKey($putKey ){
                 $this->putKey=$putKey;
                 $this->apiParas["putKey"] = $putKey;
              }

              public function getPutKey(){
              	return $this->putKey;
              }
                                                                                                                                        	                   			private $modifier;
    	                        
	public function setModifier($modifier){
		$this->modifier = $modifier;
         $this->apiParas["modifier"] = $modifier;
	}

	public function getModifier(){
	  return $this->modifier;
	}

                        	                        	                   			private $sourceLink;
    	                        
	public function setSourceLink($sourceLink){
		$this->sourceLink = $sourceLink;
         $this->apiParas["sourceLink"] = $sourceLink;
	}

	public function getSourceLink(){
	  return $this->sourceLink;
	}

                        	                   			private $isSinglePrize;
    	                        
	public function setIsSinglePrize($isSinglePrize){
		$this->isSinglePrize = $isSinglePrize;
         $this->apiParas["isSinglePrize"] = $isSinglePrize;
	}

	public function getIsSinglePrize(){
	  return $this->isSinglePrize;
	}

                        	                   			private $source;
    	                        
	public function setSource($source){
		$this->source = $source;
         $this->apiParas["source"] = $source;
	}

	public function getSource(){
	  return $this->source;
	}

                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                        	                   			private $modelIds;
    	                        
	public function setModelIds($modelIds){
		$this->modelIds = $modelIds;
         $this->apiParas["modelIds"] = $modelIds;
	}

	public function getModelIds(){
	  return $this->modelIds;
	}

                        	                   			private $modified;
    	                        
	public function setModified($modified){
		$this->modified = $modified;
         $this->apiParas["modified"] = $modified;
	}

	public function getModified(){
	  return $this->modified;
	}

                        	                   			private $rfId;
    	                        
	public function setRfId($rfId){
		$this->rfId = $rfId;
         $this->apiParas["rfId"] = $rfId;
	}

	public function getRfId(){
	  return $this->rfId;
	}

                        	                   			private $startTime;
    	                        
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["startTime"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                   			private $validate;
    	                        
	public function setValidate($validate){
		$this->validate = $validate;
         $this->apiParas["validate"] = $validate;
	}

	public function getValidate(){
	  return $this->validate;
	}

                        	                   			private $isEverydayAward;
    	                        
	public function setIsEverydayAward($isEverydayAward){
		$this->isEverydayAward = $isEverydayAward;
         $this->apiParas["isEverydayAward"] = $isEverydayAward;
	}

	public function getIsEverydayAward(){
	  return $this->isEverydayAward;
	}

                        	                        	                   			private $subtitleName;
    	                        
	public function setSubtitleName($subtitleName){
		$this->subtitleName = $subtitleName;
         $this->apiParas["subtitleName"] = $subtitleName;
	}

	public function getSubtitleName(){
	  return $this->subtitleName;
	}

                        	                   			private $created;
    	                        
	public function setCreated($created){
		$this->created = $created;
         $this->apiParas["created"] = $created;
	}

	public function getCreated(){
	  return $this->created;
	}

                        	                   			private $taskIds;
    	                        
	public function setTaskIds($taskIds){
		$this->taskIds = $taskIds;
         $this->apiParas["taskIds"] = $taskIds;
	}

	public function getTaskIds(){
	  return $this->taskIds;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $sourceCloseLink;
    	                        
	public function setSourceCloseLink($sourceCloseLink){
		$this->sourceCloseLink = $sourceCloseLink;
         $this->apiParas["sourceCloseLink"] = $sourceCloseLink;
	}

	public function getSourceCloseLink(){
	  return $this->sourceCloseLink;
	}

                        	                   			private $pictureLink;
    	                        
	public function setPictureLink($pictureLink){
		$this->pictureLink = $pictureLink;
         $this->apiParas["pictureLink"] = $pictureLink;
	}

	public function getPictureLink(){
	  return $this->pictureLink;
	}

                        	                   			private $endTime;
    	                        
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $sourceName;
    	                        
	public function setSourceName($sourceName){
		$this->sourceName = $sourceName;
         $this->apiParas["sourceName"] = $sourceName;
	}

	public function getSourceName(){
	  return $this->sourceName;
	}

                            }





        
 

