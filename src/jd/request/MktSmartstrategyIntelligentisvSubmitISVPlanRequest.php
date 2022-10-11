<?php
class MktSmartstrategyIntelligentisvSubmitISVPlanRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.mkt.smartstrategy.intelligentisv.submitISVPlan";
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
                                                        		                                    	                   			private $targetThirdCateIds;
    	                        
	public function setTargetThirdCateIds($targetThirdCateIds){
		$this->targetThirdCateIds = $targetThirdCateIds;
         $this->apiParas["targetThirdCateIds"] = $targetThirdCateIds;
	}

	public function getTargetThirdCateIds(){
	  return $this->targetThirdCateIds;
	}

                        	                   			private $planName;
    	                        
	public function setPlanName($planName){
		$this->planName = $planName;
         $this->apiParas["planName"] = $planName;
	}

	public function getPlanName(){
	  return $this->planName;
	}

                        	                   			private $targetSecondCateIds;
    	                        
	public function setTargetSecondCateIds($targetSecondCateIds){
		$this->targetSecondCateIds = $targetSecondCateIds;
         $this->apiParas["targetSecondCateIds"] = $targetSecondCateIds;
	}

	public function getTargetSecondCateIds(){
	  return $this->targetSecondCateIds;
	}

                        	                   			private $targetFirstCateIds;
    	                        
	public function setTargetFirstCateIds($targetFirstCateIds){
		$this->targetFirstCateIds = $targetFirstCateIds;
         $this->apiParas["targetFirstCateIds"] = $targetFirstCateIds;
	}

	public function getTargetFirstCateIds(){
	  return $this->targetFirstCateIds;
	}

                        	                   			private $multiChannels;
    	                        
	public function setMultiChannels($multiChannels){
		$this->multiChannels = $multiChannels;
         $this->apiParas["multiChannels"] = $multiChannels;
	}

	public function getMultiChannels(){
	  return $this->multiChannels;
	}

                        	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                        	                   			private $pullNewer;
    	                        
	public function setPullNewer($pullNewer){
		$this->pullNewer = $pullNewer;
         $this->apiParas["pullNewer"] = $pullNewer;
	}

	public function getPullNewer(){
	  return $this->pullNewer;
	}

                        	                   			private $planBeginTime;
    	                        
	public function setPlanBeginTime($planBeginTime){
		$this->planBeginTime = $planBeginTime;
         $this->apiParas["planBeginTime"] = $planBeginTime;
	}

	public function getPlanBeginTime(){
	  return $this->planBeginTime;
	}

                        	                   			private $repurchase;
    	                        
	public function setRepurchase($repurchase){
		$this->repurchase = $repurchase;
         $this->apiParas["repurchase"] = $repurchase;
	}

	public function getRepurchase(){
	  return $this->repurchase;
	}

                        	                   			private $putKey;
    	                        
	public function setPutKey($putKey){
		$this->putKey = $putKey;
         $this->apiParas["putKey"] = $putKey;
	}

	public function getPutKey(){
	  return $this->putKey;
	}

                        	                   			private $catePopStrategy;
    	                        
	public function setCatePopStrategy($catePopStrategy){
		$this->catePopStrategy = $catePopStrategy;
         $this->apiParas["catePopStrategy"] = $catePopStrategy;
	}

	public function getCatePopStrategy(){
	  return $this->catePopStrategy;
	}

                        	                   			private $planEndTime;
    	                        
	public function setPlanEndTime($planEndTime){
		$this->planEndTime = $planEndTime;
         $this->apiParas["planEndTime"] = $planEndTime;
	}

	public function getPlanEndTime(){
	  return $this->planEndTime;
	}

                        	                   			private $campus;
    	                        
	public function setCampus($campus){
		$this->campus = $campus;
         $this->apiParas["campus"] = $campus;
	}

	public function getCampus(){
	  return $this->campus;
	}

                            }





        
 

