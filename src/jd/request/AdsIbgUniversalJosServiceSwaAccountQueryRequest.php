<?php
class AdsIbgUniversalJosServiceSwaAccountQueryRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.ibg.UniversalJosService.swa.account.query";
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

                        	                        	                        	                        	                        	                        	                        	                        	                   			private $swaAccountLevel;
    	                        
	public function setSwaAccountLevel($swaAccountLevel){
		$this->swaAccountLevel = $swaAccountLevel;
         $this->apiParas["swaAccountLevel"] = $swaAccountLevel;
	}

	public function getSwaAccountLevel(){
	  return $this->swaAccountLevel;
	}

                        	                   			private $startDay;
    	                        
	public function setStartDay($startDay){
		$this->startDay = $startDay;
         $this->apiParas["startDay"] = $startDay;
	}

	public function getStartDay(){
	  return $this->startDay;
	}

                        	                   			private $endDay;
    	                        
	public function setEndDay($endDay){
		$this->endDay = $endDay;
         $this->apiParas["endDay"] = $endDay;
	}

	public function getEndDay(){
	  return $this->endDay;
	}

                        	                   			private $clickOrOrderDay;
    	                        
	public function setClickOrOrderDay($clickOrOrderDay){
		$this->clickOrOrderDay = $clickOrOrderDay;
         $this->apiParas["clickOrOrderDay"] = $clickOrOrderDay;
	}

	public function getClickOrOrderDay(){
	  return $this->clickOrOrderDay;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $paegSize;
    	                        
	public function setPaegSize($paegSize){
		$this->paegSize = $paegSize;
         $this->apiParas["paegSize"] = $paegSize;
	}

	public function getPaegSize(){
	  return $this->paegSize;
	}

                        	                   			private $sxuId;
    	                        
	public function setSxuId($sxuId){
		$this->sxuId = $sxuId;
         $this->apiParas["sxuId"] = $sxuId;
	}

	public function getSxuId(){
	  return $this->sxuId;
	}

                        	                   			private $isDaily;
    	                        
	public function setIsDaily($isDaily){
		$this->isDaily = $isDaily;
         $this->apiParas["isDaily"] = $isDaily;
	}

	public function getIsDaily(){
	  return $this->isDaily;
	}

                        	                   			private $isDownload;
    	                        
	public function setIsDownload($isDownload){
		$this->isDownload = $isDownload;
         $this->apiParas["isDownload"] = $isDownload;
	}

	public function getIsDownload(){
	  return $this->isDownload;
	}

                        	                        	                   			private $obys;
    	                        
	public function setObys($obys){
		$this->obys = $obys;
         $this->apiParas["obys"] = $obys;
	}

	public function getObys(){
	  return $this->obys;
	}

                        	                   			private $reportName;
    	                        
	public function setReportName($reportName){
		$this->reportName = $reportName;
         $this->apiParas["reportName"] = $reportName;
	}

	public function getReportName(){
	  return $this->reportName;
	}

                        	                        	}





        
 

