<?php
class AdsDspRtbFeaturedEffectOrderQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.featured.effectOrderQuery";
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
                                                        		                                    	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $clickOrOrderDay;
    	                        
	public function setClickOrOrderDay($clickOrOrderDay){
		$this->clickOrOrderDay = $clickOrOrderDay;
         $this->apiParas["clickOrOrderDay"] = $clickOrOrderDay;
	}

	public function getClickOrOrderDay(){
	  return $this->clickOrOrderDay;
	}

                        	                   			private $impressionOrClickEffect;
    	                        
	public function setImpressionOrClickEffect($impressionOrClickEffect){
		$this->impressionOrClickEffect = $impressionOrClickEffect;
         $this->apiParas["impressionOrClickEffect"] = $impressionOrClickEffect;
	}

	public function getImpressionOrClickEffect(){
	  return $this->impressionOrClickEffect;
	}

                        	                   			private $campaignId;
    	                        
	public function setCampaignId($campaignId){
		$this->campaignId = $campaignId;
         $this->apiParas["campaignId"] = $campaignId;
	}

	public function getCampaignId(){
	  return $this->campaignId;
	}

                        	                   			private $groupId;
    	                        
	public function setGroupId($groupId){
		$this->groupId = $groupId;
         $this->apiParas["groupId"] = $groupId;
	}

	public function getGroupId(){
	  return $this->groupId;
	}

                        	                   			private $orderStartDay;
    	                        
	public function setOrderStartDay($orderStartDay){
		$this->orderStartDay = $orderStartDay;
         $this->apiParas["orderStartDay"] = $orderStartDay;
	}

	public function getOrderStartDay(){
	  return $this->orderStartDay;
	}

                        	                   			private $orderEndDay;
    	                        
	public function setOrderEndDay($orderEndDay){
		$this->orderEndDay = $orderEndDay;
         $this->apiParas["orderEndDay"] = $orderEndDay;
	}

	public function getOrderEndDay(){
	  return $this->orderEndDay;
	}

                        	                   			private $cilckStartDay;
    	                        
	public function setCilckStartDay($cilckStartDay){
		$this->cilckStartDay = $cilckStartDay;
         $this->apiParas["cilckStartDay"] = $cilckStartDay;
	}

	public function getCilckStartDay(){
	  return $this->cilckStartDay;
	}

                        	                   			private $cilckEndDay;
    	                        
	public function setCilckEndDay($cilckEndDay){
		$this->cilckEndDay = $cilckEndDay;
         $this->apiParas["cilckEndDay"] = $cilckEndDay;
	}

	public function getCilckEndDay(){
	  return $this->cilckEndDay;
	}

                        	                   			private $mySelf;
    	                        
	public function setMySelf($mySelf){
		$this->mySelf = $mySelf;
         $this->apiParas["mySelf"] = $mySelf;
	}

	public function getMySelf(){
	  return $this->mySelf;
	}

                        	                   			private $clickOrOrderCaliber;
    	                        
	public function setClickOrOrderCaliber($clickOrOrderCaliber){
		$this->clickOrOrderCaliber = $clickOrOrderCaliber;
         $this->apiParas["clickOrOrderCaliber"] = $clickOrOrderCaliber;
	}

	public function getClickOrOrderCaliber(){
	  return $this->clickOrOrderCaliber;
	}

                        	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $posPackageId;
    	                        
	public function setPosPackageId($posPackageId){
		$this->posPackageId = $posPackageId;
         $this->apiParas["posPackageId"] = $posPackageId;
	}

	public function getPosPackageId(){
	  return $this->posPackageId;
	}

                                                                        		                                    	                        	                        	                        	                            }





        
 

