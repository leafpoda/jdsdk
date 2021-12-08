<?php
class EclpMasterInsertStoreInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.master.insertStoreInfo";
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
                                                        		                                    	                   			private $sellerNo;
    	                        
	public function setSellerNo($sellerNo){
		$this->sellerNo = $sellerNo;
         $this->apiParas["sellerNo"] = $sellerNo;
	}

	public function getSellerNo(){
	  return $this->sellerNo;
	}

                        	                   			private $storeName;
    	                        
	public function setStoreName($storeName){
		$this->storeName = $storeName;
         $this->apiParas["storeName"] = $storeName;
	}

	public function getStoreName(){
	  return $this->storeName;
	}

                        	                   			private $storeType;
    	                        
	public function setStoreType($storeType){
		$this->storeType = $storeType;
         $this->apiParas["storeType"] = $storeType;
	}

	public function getStoreType(){
	  return $this->storeType;
	}

                        	                   			private $storeBusinessModel;
    	                        
	public function setStoreBusinessModel($storeBusinessModel){
		$this->storeBusinessModel = $storeBusinessModel;
         $this->apiParas["storeBusinessModel"] = $storeBusinessModel;
	}

	public function getStoreBusinessModel(){
	  return $this->storeBusinessModel;
	}

                        	                   			private $area;
    	                        
	public function setArea($area){
		$this->area = $area;
         $this->apiParas["area"] = $area;
	}

	public function getArea(){
	  return $this->area;
	}

                        	                   			private $openFlag;
    	                        
	public function setOpenFlag($openFlag){
		$this->openFlag = $openFlag;
         $this->apiParas["openFlag"] = $openFlag;
	}

	public function getOpenFlag(){
	  return $this->openFlag;
	}

                        	                   			private $crowdsourcingFlag;
    	                        
	public function setCrowdsourcingFlag($crowdsourcingFlag){
		$this->crowdsourcingFlag = $crowdsourcingFlag;
         $this->apiParas["crowdsourcingFlag"] = $crowdsourcingFlag;
	}

	public function getCrowdsourcingFlag(){
	  return $this->crowdsourcingFlag;
	}

                        	                   			private $selfPickFlag;
    	                        
	public function setSelfPickFlag($selfPickFlag){
		$this->selfPickFlag = $selfPickFlag;
         $this->apiParas["selfPickFlag"] = $selfPickFlag;
	}

	public function getSelfPickFlag(){
	  return $this->selfPickFlag;
	}

                        	                   			private $deliverFlag;
    	                        
	public function setDeliverFlag($deliverFlag){
		$this->deliverFlag = $deliverFlag;
         $this->apiParas["deliverFlag"] = $deliverFlag;
	}

	public function getDeliverFlag(){
	  return $this->deliverFlag;
	}

                        	                   			private $sellerControlStock;
    	                        
	public function setSellerControlStock($sellerControlStock){
		$this->sellerControlStock = $sellerControlStock;
         $this->apiParas["sellerControlStock"] = $sellerControlStock;
	}

	public function getSellerControlStock(){
	  return $this->sellerControlStock;
	}

                        	                   			private $storeSystem;
    	                        
	public function setStoreSystem($storeSystem){
		$this->storeSystem = $storeSystem;
         $this->apiParas["storeSystem"] = $storeSystem;
	}

	public function getStoreSystem(){
	  return $this->storeSystem;
	}

                        	                   			private $contacts;
    	                        
	public function setContacts($contacts){
		$this->contacts = $contacts;
         $this->apiParas["contacts"] = $contacts;
	}

	public function getContacts(){
	  return $this->contacts;
	}

                        	                   			private $phone;
    	                        
	public function setPhone($phone){
		$this->phone = $phone;
         $this->apiParas["phone"] = $phone;
	}

	public function getPhone(){
	  return $this->phone;
	}

                        	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $city;
    	                        
	public function setCity($city){
		$this->city = $city;
         $this->apiParas["city"] = $city;
	}

	public function getCity(){
	  return $this->city;
	}

                        	                   			private $county;
    	                        
	public function setCounty($county){
		$this->county = $county;
         $this->apiParas["county"] = $county;
	}

	public function getCounty(){
	  return $this->county;
	}

                        	                   			private $town;
    	                        
	public function setTown($town){
		$this->town = $town;
         $this->apiParas["town"] = $town;
	}

	public function getTown(){
	  return $this->town;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $postCode;
    	                        
	public function setPostCode($postCode){
		$this->postCode = $postCode;
         $this->apiParas["postCode"] = $postCode;
	}

	public function getPostCode(){
	  return $this->postCode;
	}

                        	                   			private $distributionScope;
    	                        
	public function setDistributionScope($distributionScope){
		$this->distributionScope = $distributionScope;
         $this->apiParas["distributionScope"] = $distributionScope;
	}

	public function getDistributionScope(){
	  return $this->distributionScope;
	}

                        	                   			private $geographicCoordinate;
    	                        
	public function setGeographicCoordinate($geographicCoordinate){
		$this->geographicCoordinate = $geographicCoordinate;
         $this->apiParas["geographicCoordinate"] = $geographicCoordinate;
	}

	public function getGeographicCoordinate(){
	  return $this->geographicCoordinate;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                                                    	}





        
 

