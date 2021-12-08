<?php
class ClientdsShopQuerylistRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.clientds.shop.querylist";
	}
	
	public function getApiParas(){
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
                                    	                   			private $account;
    	                        
	public function setAccount($account){
		$this->account = $account;
         $this->apiParas["account"] = $account;
	}

	public function getAccount(){
	  return $this->account;
	}

                        	                   			private $aid;
    	                        
	public function setAid($aid){
		$this->aid = $aid;
         $this->apiParas["aid"] = $aid;
	}

	public function getAid(){
	  return $this->aid;
	}

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                   			private $clientType;
    	                        
	public function setClientType($clientType){
		$this->clientType = $clientType;
         $this->apiParas["clientType"] = $clientType;
	}

	public function getClientType(){
	  return $this->clientType;
	}

                        	                   			private $customer;
    	                        
	public function setCustomer($customer){
		$this->customer = $customer;
         $this->apiParas["customer"] = $customer;
	}

	public function getCustomer(){
	  return $this->customer;
	}

                        	                   			private $waiter;
    	                        
	public function setWaiter($waiter){
		$this->waiter = $waiter;
         $this->apiParas["waiter"] = $waiter;
	}

	public function getWaiter(){
	  return $this->waiter;
	}

                        	                   			private $mark;
    	                        
	public function setMark($mark){
		$this->mark = $mark;
         $this->apiParas["mark"] = $mark;
	}

	public function getMark(){
	  return $this->mark;
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

                        	                   			private $sd;
    	                        
	public function setSd($sd){
		$this->sd = $sd;
         $this->apiParas["sd"] = $sd;
	}

	public function getSd(){
	  return $this->sd;
	}

                        	                   			private $ed;
    	                        
	public function setEd($ed){
		$this->ed = $ed;
         $this->apiParas["ed"] = $ed;
	}

	public function getEd(){
	  return $this->ed;
	}

                        	                   			private $st;
    	                        
	public function setSt($st){
		$this->st = $st;
         $this->apiParas["st"] = $st;
	}

	public function getSt(){
	  return $this->st;
	}

                        	}





        
 

