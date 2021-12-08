<?php
class DataVenderUserpackIsvSmsBatchSentRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.userpack.isv.sms.batch.sent";
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
                                                        		                                    	                        	                        	                        	                   			private $activityId;
    	                                                            
	public function setActivityId($activityId){
		$this->activityId = $activityId;
         $this->apiParas["activity_id"] = $activityId;
	}

	public function getActivityId(){
	  return $this->activityId;
	}

                        	                   			private $searchId;
    	                                                            
	public function setSearchId($searchId){
		$this->searchId = $searchId;
         $this->apiParas["search_id"] = $searchId;
	}

	public function getSearchId(){
	  return $this->searchId;
	}

                        	                   			private $sendTime;
    	                                                            
	public function setSendTime($sendTime){
		$this->sendTime = $sendTime;
         $this->apiParas["send_time"] = $sendTime;
	}

	public function getSendTime(){
	  return $this->sendTime;
	}

                        	                   			private $textContent;
    	                                                            
	public function setTextContent($textContent){
		$this->textContent = $textContent;
         $this->apiParas["text_content"] = $textContent;
	}

	public function getTextContent(){
	  return $this->textContent;
	}

                        	                   			private $destUrl;
    	                                                            
	public function setDestUrl($destUrl){
		$this->destUrl = $destUrl;
         $this->apiParas["dest_url"] = $destUrl;
	}

	public function getDestUrl(){
	  return $this->destUrl;
	}

                        	                   			private $fullContent;
    	                                                            
	public function setFullContent($fullContent){
		$this->fullContent = $fullContent;
         $this->apiParas["full_content"] = $fullContent;
	}

	public function getFullContent(){
	  return $this->fullContent;
	}

                        	                   			private $smsSign;
    	                                                            
	public function setSmsSign($smsSign){
		$this->smsSign = $smsSign;
         $this->apiParas["sms_sign"] = $smsSign;
	}

	public function getSmsSign(){
	  return $this->smsSign;
	}

                        	                   			private $sendNum;
    	                                                            
	public function setSendNum($sendNum){
		$this->sendNum = $sendNum;
         $this->apiParas["send_num"] = $sendNum;
	}

	public function getSendNum(){
	  return $this->sendNum;
	}

                        	                   			private $approverPhone;
    	                                                            
	public function setApproverPhone($approverPhone){
		$this->approverPhone = $approverPhone;
         $this->apiParas["approver_phone"] = $approverPhone;
	}

	public function getApproverPhone(){
	  return $this->approverPhone;
	}

                        	                   			private $activityRecordId;
    	                                                                        
	public function setActivityRecordId($activityRecordId){
		$this->activityRecordId = $activityRecordId;
         $this->apiParas["activity_record_id"] = $activityRecordId;
	}

	public function getActivityRecordId(){
	  return $this->activityRecordId;
	}

                            }





        
 

