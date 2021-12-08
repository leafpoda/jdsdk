<?php
class UeOrderNewBookOnDoorRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.order.new.bookOnDoor";
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
                                                        		                                    	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $bookOperateDate;
    	                        
	public function setBookOperateDate($bookOperateDate){
		$this->bookOperateDate = $bookOperateDate;
         $this->apiParas["bookOperateDate"] = $bookOperateDate;
	}

	public function getBookOperateDate(){
	  return $this->bookOperateDate;
	}

                        	                   			private $bookDate;
    	                        
	public function setBookDate($bookDate){
		$this->bookDate = $bookDate;
         $this->apiParas["bookDate"] = $bookDate;
	}

	public function getBookDate(){
	  return $this->bookDate;
	}

                        	                   			private $bookTimes;
    	                        
	public function setBookTimes($bookTimes){
		$this->bookTimes = $bookTimes;
         $this->apiParas["bookTimes"] = $bookTimes;
	}

	public function getBookTimes(){
	  return $this->bookTimes;
	}

                        	                   			private $createBy;
    	                        
	public function setCreateBy($createBy){
		$this->createBy = $createBy;
         $this->apiParas["createBy"] = $createBy;
	}

	public function getCreateBy(){
	  return $this->createBy;
	}

                        	                   			private $appid;
    	                        
	public function setAppid($appid){
		$this->appid = $appid;
         $this->apiParas["appid"] = $appid;
	}

	public function getAppid(){
	  return $this->appid;
	}

                        	                   			private $venderCode;
    	                        
	public function setVenderCode($venderCode){
		$this->venderCode = $venderCode;
         $this->apiParas["venderCode"] = $venderCode;
	}

	public function getVenderCode(){
	  return $this->venderCode;
	}

                        	                   			private $bookingStartDate;
    	                        
	public function setBookingStartDate($bookingStartDate){
		$this->bookingStartDate = $bookingStartDate;
         $this->apiParas["bookingStartDate"] = $bookingStartDate;
	}

	public function getBookingStartDate(){
	  return $this->bookingStartDate;
	}

                        	                   			private $bookingEndDate;
    	                        
	public function setBookingEndDate($bookingEndDate){
		$this->bookingEndDate = $bookingEndDate;
         $this->apiParas["bookingEndDate"] = $bookingEndDate;
	}

	public function getBookingEndDate(){
	  return $this->bookingEndDate;
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





        
 

