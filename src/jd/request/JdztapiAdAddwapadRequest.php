<?php
class JdztapiAdAddwapadRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jdztapi.ad.addwapad";
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
                                    	                        	                   			private $ztpin;
    	                        
	public function setZtpin($ztpin){
		$this->ztpin = $ztpin;
         $this->apiParas["ztpin"] = $ztpin;
	}

	public function getZtpin(){
	  return $this->ztpin;
	}

                        	                   			private $adattribute;
    	                        
	public function setAdattribute($adattribute){
		$this->adattribute = $adattribute;
         $this->apiParas["adattribute"] = $adattribute;
	}

	public function getAdattribute(){
	  return $this->adattribute;
	}

                        	                   			private $adbidtype;
    	                        
	public function setAdbidtype($adbidtype){
		$this->adbidtype = $adbidtype;
         $this->apiParas["adbidtype"] = $adbidtype;
	}

	public function getAdbidtype(){
	  return $this->adbidtype;
	}

                        	                   			private $adbiztype;
    	                        
	public function setAdbiztype($adbiztype){
		$this->adbiztype = $adbiztype;
         $this->apiParas["adbiztype"] = $adbiztype;
	}

	public function getAdbiztype(){
	  return $this->adbiztype;
	}

                        	                   			private $adcreativeway;
    	                        
	public function setAdcreativeway($adcreativeway){
		$this->adcreativeway = $adcreativeway;
         $this->apiParas["adcreativeway"] = $adcreativeway;
	}

	public function getAdcreativeway(){
	  return $this->adcreativeway;
	}

                        	                   			private $adelement;
    	                        
	public function setAdelement($adelement){
		$this->adelement = $adelement;
         $this->apiParas["adelement"] = $adelement;
	}

	public function getAdelement(){
	  return $this->adelement;
	}

                        	                   			private $adelementpacket;
    	                        
	public function setAdelementpacket($adelementpacket){
		$this->adelementpacket = $adelementpacket;
         $this->apiParas["adelementpacket"] = $adelementpacket;
	}

	public function getAdelementpacket(){
	  return $this->adelementpacket;
	}

                        	                   			private $adremark;
    	                        
	public function setAdremark($adremark){
		$this->adremark = $adremark;
         $this->apiParas["adremark"] = $adremark;
	}

	public function getAdremark(){
	  return $this->adremark;
	}

                        	                   			private $adservicetype;
    	                        
	public function setAdservicetype($adservicetype){
		$this->adservicetype = $adservicetype;
         $this->apiParas["adservicetype"] = $adservicetype;
	}

	public function getAdservicetype(){
	  return $this->adservicetype;
	}

                        	                   			private $adspecid;
    	                        
	public function setAdspecid($adspecid){
		$this->adspecid = $adspecid;
         $this->apiParas["adspecid"] = $adspecid;
	}

	public function getAdspecid(){
	  return $this->adspecid;
	}

                        	                   			private $adtype;
    	                        
	public function setAdtype($adtype){
		$this->adtype = $adtype;
         $this->apiParas["adtype"] = $adtype;
	}

	public function getAdtype(){
	  return $this->adtype;
	}

                        	                   			private $begindate;
    	                        
	public function setBegindate($begindate){
		$this->begindate = $begindate;
         $this->apiParas["begindate"] = $begindate;
	}

	public function getBegindate(){
	  return $this->begindate;
	}

                        	                   			private $bidtype;
    	                        
	public function setBidtype($bidtype){
		$this->bidtype = $bidtype;
         $this->apiParas["bidtype"] = $bidtype;
	}

	public function getBidtype(){
	  return $this->bidtype;
	}

                        	                   			private $citytype;
    	                        
	public function setCitytype($citytype){
		$this->citytype = $citytype;
         $this->apiParas["citytype"] = $citytype;
	}

	public function getCitytype(){
	  return $this->citytype;
	}

                        	                   			private $clickprice;
    	                        
	public function setClickprice($clickprice){
		$this->clickprice = $clickprice;
         $this->apiParas["clickprice"] = $clickprice;
	}

	public function getClickprice(){
	  return $this->clickprice;
	}

                        	                   			private $countdown;
    	                        
	public function setCountdown($countdown){
		$this->countdown = $countdown;
         $this->apiParas["countdown"] = $countdown;
	}

	public function getCountdown(){
	  return $this->countdown;
	}

                        	                   			private $creativecategory;
    	                        
	public function setCreativecategory($creativecategory){
		$this->creativecategory = $creativecategory;
         $this->apiParas["creativecategory"] = $creativecategory;
	}

	public function getCreativecategory(){
	  return $this->creativecategory;
	}

                        	                   			private $creativetag;
    	                        
	public function setCreativetag($creativetag){
		$this->creativetag = $creativetag;
         $this->apiParas["creativetag"] = $creativetag;
	}

	public function getCreativetag(){
	  return $this->creativetag;
	}

                        	                   			private $crtmaterialid;
    	                        
	public function setCrtmaterialid($crtmaterialid){
		$this->crtmaterialid = $crtmaterialid;
         $this->apiParas["crtmaterialid"] = $crtmaterialid;
	}

	public function getCrtmaterialid(){
	  return $this->crtmaterialid;
	}

                        	                   			private $customurl;
    	                        
	public function setCustomurl($customurl){
		$this->customurl = $customurl;
         $this->apiParas["customurl"] = $customurl;
	}

	public function getCustomurl(){
	  return $this->customurl;
	}

                        	                   			private $customwebsite;
    	                        
	public function setCustomwebsite($customwebsite){
		$this->customwebsite = $customwebsite;
         $this->apiParas["customwebsite"] = $customwebsite;
	}

	public function getCustomwebsite(){
	  return $this->customwebsite;
	}

                        	                   			private $enddate;
    	                        
	public function setEnddate($enddate){
		$this->enddate = $enddate;
         $this->apiParas["enddate"] = $enddate;
	}

	public function getEnddate(){
	  return $this->enddate;
	}

                        	                   			private $flowpacketsiteset;
    	                        
	public function setFlowpacketsiteset($flowpacketsiteset){
		$this->flowpacketsiteset = $flowpacketsiteset;
         $this->apiParas["flowpacketsiteset"] = $flowpacketsiteset;
	}

	public function getFlowpacketsiteset(){
	  return $this->flowpacketsiteset;
	}

                        	                   			private $landingpagetype;
    	                        
	public function setLandingpagetype($landingpagetype){
		$this->landingpagetype = $landingpagetype;
         $this->apiParas["landingpagetype"] = $landingpagetype;
	}

	public function getLandingpagetype(){
	  return $this->landingpagetype;
	}

                        	                   			private $limitcost;
    	                        
	public function setLimitcost($limitcost){
		$this->limitcost = $limitcost;
         $this->apiParas["limitcost"] = $limitcost;
	}

	public function getLimitcost(){
	  return $this->limitcost;
	}

                        	                   			private $materialtype;
    	                        
	public function setMaterialtype($materialtype){
		$this->materialtype = $materialtype;
         $this->apiParas["materialtype"] = $materialtype;
	}

	public function getMaterialtype(){
	  return $this->materialtype;
	}

                        	                   			private $mediatype;
    	                        
	public function setMediatype($mediatype){
		$this->mediatype = $mediatype;
         $this->apiParas["mediatype"] = $mediatype;
	}

	public function getMediatype(){
	  return $this->mediatype;
	}

                        	                   			private $ocpaexpand;
    	                        
	public function setOcpaexpand($ocpaexpand){
		$this->ocpaexpand = $ocpaexpand;
         $this->apiParas["ocpaexpand"] = $ocpaexpand;
	}

	public function getOcpaexpand(){
	  return $this->ocpaexpand;
	}

                        	                   			private $optimizegoal;
    	                        
	public function setOptimizegoal($optimizegoal){
		$this->optimizegoal = $optimizegoal;
         $this->apiParas["optimizegoal"] = $optimizegoal;
	}

	public function getOptimizegoal(){
	  return $this->optimizegoal;
	}

                        	                   			private $planid;
    	                        
	public function setPlanid($planid){
		$this->planid = $planid;
         $this->apiParas["planid"] = $planid;
	}

	public function getPlanid(){
	  return $this->planid;
	}

                        	                   			private $playplatform;
    	                        
	public function setPlayplatform($playplatform){
		$this->playplatform = $playplatform;
         $this->apiParas["playplatform"] = $playplatform;
	}

	public function getPlayplatform(){
	  return $this->playplatform;
	}

                        	                   			private $producttag;
    	                        
	public function setProducttag($producttag){
		$this->producttag = $producttag;
         $this->apiParas["producttag"] = $producttag;
	}

	public function getProducttag(){
	  return $this->producttag;
	}

                        	                   			private $profileid;
    	                        
	public function setProfileid($profileid){
		$this->profileid = $profileid;
         $this->apiParas["profileid"] = $profileid;
	}

	public function getProfileid(){
	  return $this->profileid;
	}

                        	                   			private $promotiontag;
    	                        
	public function setPromotiontag($promotiontag){
		$this->promotiontag = $promotiontag;
         $this->apiParas["promotiontag"] = $promotiontag;
	}

	public function getPromotiontag(){
	  return $this->promotiontag;
	}

                        	                   			private $scenespec;
    	                        
	public function setScenespec($scenespec){
		$this->scenespec = $scenespec;
         $this->apiParas["scenespec"] = $scenespec;
	}

	public function getScenespec(){
	  return $this->scenespec;
	}

                        	                   			private $shopid;
    	                        
	public function setShopid($shopid){
		$this->shopid = $shopid;
         $this->apiParas["shopid"] = $shopid;
	}

	public function getShopid(){
	  return $this->shopid;
	}

                        	                   			private $siteset;
    	                        
	public function setSiteset($siteset){
		$this->siteset = $siteset;
         $this->apiParas["siteset"] = $siteset;
	}

	public function getSiteset(){
	  return $this->siteset;
	}

                        	                   			private $skuid;
    	                        
	public function setSkuid($skuid){
		$this->skuid = $skuid;
         $this->apiParas["skuid"] = $skuid;
	}

	public function getSkuid(){
	  return $this->skuid;
	}

                        	                   			private $speedmode;
    	                        
	public function setSpeedmode($speedmode){
		$this->speedmode = $speedmode;
         $this->apiParas["speedmode"] = $speedmode;
	}

	public function getSpeedmode(){
	  return $this->speedmode;
	}

                        	                   			private $subadbiztype;
    	                        
	public function setSubadbiztype($subadbiztype){
		$this->subadbiztype = $subadbiztype;
         $this->apiParas["subadbiztype"] = $subadbiztype;
	}

	public function getSubadbiztype(){
	  return $this->subadbiztype;
	}

                        	                   			private $targeturlexpandparam;
    	                        
	public function setTargeturlexpandparam($targeturlexpandparam){
		$this->targeturlexpandparam = $targeturlexpandparam;
         $this->apiParas["targeturlexpandparam"] = $targeturlexpandparam;
	}

	public function getTargeturlexpandparam(){
	  return $this->targeturlexpandparam;
	}

                        	                   			private $targeturlplatform;
    	                        
	public function setTargeturlplatform($targeturlplatform){
		$this->targeturlplatform = $targeturlplatform;
         $this->apiParas["targeturlplatform"] = $targeturlplatform;
	}

	public function getTargeturlplatform(){
	  return $this->targeturlplatform;
	}

                        	                   			private $targeturltype;
    	                        
	public function setTargeturltype($targeturltype){
		$this->targeturltype = $targeturltype;
         $this->apiParas["targeturltype"] = $targeturltype;
	}

	public function getTargeturltype(){
	  return $this->targeturltype;
	}

                        	                   			private $tcpamode;
    	                        
	public function setTcpamode($tcpamode){
		$this->tcpamode = $tcpamode;
         $this->apiParas["tcpamode"] = $tcpamode;
	}

	public function getTcpamode(){
	  return $this->tcpamode;
	}

                        	                   			private $tcpaprice;
    	                        
	public function setTcpaprice($tcpaprice){
		$this->tcpaprice = $tcpaprice;
         $this->apiParas["tcpaprice"] = $tcpaprice;
	}

	public function getTcpaprice(){
	  return $this->tcpaprice;
	}

                        	                   			private $times;
    	                        
	public function setTimes($times){
		$this->times = $times;
         $this->apiParas["times"] = $times;
	}

	public function getTimes(){
	  return $this->times;
	}

                        	                   			private $title;
    	                        
	public function setTitle($title){
		$this->title = $title;
         $this->apiParas["title"] = $title;
	}

	public function getTitle(){
	  return $this->title;
	}

                        	                   			private $title2;
    	                        
	public function setTitle2($title2){
		$this->title2 = $title2;
         $this->apiParas["title2"] = $title2;
	}

	public function getTitle2(){
	  return $this->title2;
	}

                        	                   			private $venderid;
    	                        
	public function setVenderid($venderid){
		$this->venderid = $venderid;
         $this->apiParas["venderid"] = $venderid;
	}

	public function getVenderid(){
	  return $this->venderid;
	}

                        	                   			private $Activityid;
    	                        
	public function setActivityid($Activityid){
		$this->Activityid = $Activityid;
         $this->apiParas["Activityid"] = $Activityid;
	}

	public function getActivityid(){
	  return $this->Activityid;
	}

                        	                   			private $hascreativepacks;
    	                        
	public function setHascreativepacks($hascreativepacks){
		$this->hascreativepacks = $hascreativepacks;
         $this->apiParas["hascreativepacks"] = $hascreativepacks;
	}

	public function getHascreativepacks(){
	  return $this->hascreativepacks;
	}

                        	                   			private $adid;
    	                        
	public function setAdid($adid){
		$this->adid = $adid;
         $this->apiParas["adid"] = $adid;
	}

	public function getAdid(){
	  return $this->adid;
	}

                        	                   			private $planinfo;
    	                        
	public function setPlaninfo($planinfo){
		$this->planinfo = $planinfo;
         $this->apiParas["planinfo"] = $planinfo;
	}

	public function getPlaninfo(){
	  return $this->planinfo;
	}

                        	                   			private $profileinfo;
    	                        
	public function setProfileinfo($profileinfo){
		$this->profileinfo = $profileinfo;
         $this->apiParas["profileinfo"] = $profileinfo;
	}

	public function getProfileinfo(){
	  return $this->profileinfo;
	}

                        	                   			private $ie;
    	                        
	public function setIe($ie){
		$this->ie = $ie;
         $this->apiParas["ie"] = $ie;
	}

	public function getIe(){
	  return $this->ie;
	}

}





        
 

