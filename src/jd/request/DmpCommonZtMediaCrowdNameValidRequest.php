<?php
class DmpCommonZtMediaCrowdNameValidRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dmp.common.zt.media.crowd.name.valid";
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
                                    	                        	                        	                   			private $accessPin;
    	                        
	public function setAccessPin($accessPin){
		$this->accessPin = $accessPin;
         $this->apiParas["accessPin"] = $accessPin;
	}

	public function getAccessPin(){
	  return $this->accessPin;
	}

                        	                   			private $authType;
    	                        
	public function setAuthType($authType){
		$this->authType = $authType;
         $this->apiParas["authType"] = $authType;
	}

	public function getAuthType(){
	  return $this->authType;
	}

                        	                        	                        	                        	                        	                   			private $mediaResourceType;
    	                        
	public function setMediaResourceType($mediaResourceType){
		$this->mediaResourceType = $mediaResourceType;
         $this->apiParas["mediaResourceType"] = $mediaResourceType;
	}

	public function getMediaResourceType(){
	  return $this->mediaResourceType;
	}

                        	                   			private $profileType;
    	                        
	public function setProfileType($profileType){
		$this->profileType = $profileType;
         $this->apiParas["profileType"] = $profileType;
	}

	public function getProfileType(){
	  return $this->profileType;
	}

                        	                        	                   			private $mediaCrowdInfo;
    	                        
	public function setMediaCrowdInfo($mediaCrowdInfo){
		$this->mediaCrowdInfo = $mediaCrowdInfo;
         $this->apiParas["mediaCrowdInfo"] = $mediaCrowdInfo;
	}

	public function getMediaCrowdInfo(){
	  return $this->mediaCrowdInfo;
	}

                        	                   			private $siteId;
    	                        
	public function setSiteId($siteId){
		$this->siteId = $siteId;
         $this->apiParas["siteId"] = $siteId;
	}

	public function getSiteId(){
	  return $this->siteId;
	}

                        	                   			private $jdMediaUserId;
    	                        
	public function setJdMediaUserId($jdMediaUserId){
		$this->jdMediaUserId = $jdMediaUserId;
         $this->apiParas["jdMediaUserId"] = $jdMediaUserId;
	}

	public function getJdMediaUserId(){
	  return $this->jdMediaUserId;
	}

                        	                        	                        	                   			private $openIdBuyer;
    	                                                                        
	public function setOpenIdBuyer($openIdBuyer){
		$this->openIdBuyer = $openIdBuyer;
         $this->apiParas["open_id_buyer"] = $openIdBuyer;
	}

	public function getOpenIdBuyer(){
	  return $this->openIdBuyer;
	}

                        	                   			private $xidBuyer;
    	                                                            
	public function setXidBuyer($xidBuyer){
		$this->xidBuyer = $xidBuyer;
         $this->apiParas["xid_buyer"] = $xidBuyer;
	}

	public function getXidBuyer(){
	  return $this->xidBuyer;
	}

}





        
 

