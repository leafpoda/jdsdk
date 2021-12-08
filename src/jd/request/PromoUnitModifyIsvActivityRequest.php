<?php
class PromoUnitModifyIsvActivityRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.promo.unit.modifyIsvActivity";
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
                                                        		                                    	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                        	                   			private $categoryId;
    	                        
	public function setCategoryId($categoryId){
		$this->categoryId = $categoryId;
         $this->apiParas["categoryId"] = $categoryId;
	}

	public function getCategoryId(){
	  return $this->categoryId;
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

                        	                   			private $imageUrl;
    	                        
	public function setImageUrl($imageUrl){
		$this->imageUrl = $imageUrl;
         $this->apiParas["imageUrl"] = $imageUrl;
	}

	public function getImageUrl(){
	  return $this->imageUrl;
	}

                        	                   			private $note;
    	                        
	public function setNote($note){
		$this->note = $note;
         $this->apiParas["note"] = $note;
	}

	public function getNote(){
	  return $this->note;
	}

                        	                   			private $channelType;
    	                        
	public function setChannelType($channelType){
		$this->channelType = $channelType;
         $this->apiParas["channelType"] = $channelType;
	}

	public function getChannelType(){
	  return $this->channelType;
	}

                        	                   			private $ruleType;
    	                        
	public function setRuleType($ruleType){
		$this->ruleType = $ruleType;
         $this->apiParas["ruleType"] = $ruleType;
	}

	public function getRuleType(){
	  return $this->ruleType;
	}

                        	                   			private $shared;
    	                        
	public function setShared($shared){
		$this->shared = $shared;
         $this->apiParas["shared"] = $shared;
	}

	public function getShared(){
	  return $this->shared;
	}

                        	                   			private $source;
    	                        
	public function setSource($source){
		$this->source = $source;
         $this->apiParas["source"] = $source;
	}

	public function getSource(){
	  return $this->source;
	}

                        	                   			private $isvUrl;
    	                        
	public function setIsvUrl($isvUrl){
		$this->isvUrl = $isvUrl;
         $this->apiParas["isvUrl"] = $isvUrl;
	}

	public function getIsvUrl(){
	  return $this->isvUrl;
	}

                        	                   			private $pluginName;
    	                        
	public function setPluginName($pluginName){
		$this->pluginName = $pluginName;
         $this->apiParas["pluginName"] = $pluginName;
	}

	public function getPluginName(){
	  return $this->pluginName;
	}

                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                        	                   			private $callBackUrl;
    	                        
	public function setCallBackUrl($callBackUrl){
		$this->callBackUrl = $callBackUrl;
         $this->apiParas["callBackUrl"] = $callBackUrl;
	}

	public function getCallBackUrl(){
	  return $this->callBackUrl;
	}

                            }





        
 

