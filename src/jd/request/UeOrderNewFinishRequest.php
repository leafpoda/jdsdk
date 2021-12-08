<?php
class UeOrderNewFinishRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.order.new.finish";
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
                                                        		                                    	                   			private $barcode2;
    	                        
	public function setBarcode2($barcode2){
		$this->barcode2 = $barcode2;
         $this->apiParas["barcode2"] = $barcode2;
	}

	public function getBarcode2(){
	  return $this->barcode2;
	}

                        	                   			private $barcode1;
    	                        
	public function setBarcode1($barcode1){
		$this->barcode1 = $barcode1;
         $this->apiParas["barcode1"] = $barcode1;
	}

	public function getBarcode1(){
	  return $this->barcode1;
	}

                        	                   			private $failureReason;
    	                        
	public function setFailureReason($failureReason){
		$this->failureReason = $failureReason;
         $this->apiParas["failureReason"] = $failureReason;
	}

	public function getFailureReason(){
	  return $this->failureReason;
	}

                        	                   			private $siteName;
    	                        
	public function setSiteName($siteName){
		$this->siteName = $siteName;
         $this->apiParas["siteName"] = $siteName;
	}

	public function getSiteName(){
	  return $this->siteName;
	}

                        	                   			private $failureName;
    	                        
	public function setFailureName($failureName){
		$this->failureName = $failureName;
         $this->apiParas["failureName"] = $failureName;
	}

	public function getFailureName(){
	  return $this->failureName;
	}

                        	                   			private $pic1;
    	                        
	public function setPic1($pic1){
		$this->pic1 = $pic1;
         $this->apiParas["pic1"] = $pic1;
	}

	public function getPic1(){
	  return $this->pic1;
	}

                        	                   			private $venderCode;
    	                        
	public function setVenderCode($venderCode){
		$this->venderCode = $venderCode;
         $this->apiParas["venderCode"] = $venderCode;
	}

	public function getVenderCode(){
	  return $this->venderCode;
	}

                        	                   			private $pic2;
    	                        
	public function setPic2($pic2){
		$this->pic2 = $pic2;
         $this->apiParas["pic2"] = $pic2;
	}

	public function getPic2(){
	  return $this->pic2;
	}

                        	                   			private $pic3;
    	                        
	public function setPic3($pic3){
		$this->pic3 = $pic3;
         $this->apiParas["pic3"] = $pic3;
	}

	public function getPic3(){
	  return $this->pic3;
	}

                        	                   			private $dealRemark;
    	                        
	public function setDealRemark($dealRemark){
		$this->dealRemark = $dealRemark;
         $this->apiParas["dealRemark"] = $dealRemark;
	}

	public function getDealRemark(){
	  return $this->dealRemark;
	}

                        	                   			private $pic4;
    	                        
	public function setPic4($pic4){
		$this->pic4 = $pic4;
         $this->apiParas["pic4"] = $pic4;
	}

	public function getPic4(){
	  return $this->pic4;
	}

                        	                   			private $fixMethod;
    	                        
	public function setFixMethod($fixMethod){
		$this->fixMethod = $fixMethod;
         $this->apiParas["fixMethod"] = $fixMethod;
	}

	public function getFixMethod(){
	  return $this->fixMethod;
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

                        	                   			private $dealResult;
    	                        
	public function setDealResult($dealResult){
		$this->dealResult = $dealResult;
         $this->apiParas["dealResult"] = $dealResult;
	}

	public function getDealResult(){
	  return $this->dealResult;
	}

                        	                   			private $settleCode;
    	                        
	public function setSettleCode($settleCode){
		$this->settleCode = $settleCode;
         $this->apiParas["settleCode"] = $settleCode;
	}

	public function getSettleCode(){
	  return $this->settleCode;
	}

                        	                   			private $inSkuSn;
    	                        
	public function setInSkuSn($inSkuSn){
		$this->inSkuSn = $inSkuSn;
         $this->apiParas["inSkuSn"] = $inSkuSn;
	}

	public function getInSkuSn(){
	  return $this->inSkuSn;
	}

                        	                   			private $outSkuSn;
    	                        
	public function setOutSkuSn($outSkuSn){
		$this->outSkuSn = $outSkuSn;
         $this->apiParas["outSkuSn"] = $outSkuSn;
	}

	public function getOutSkuSn(){
	  return $this->outSkuSn;
	}

                        	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $detecDetail;
    	                        
	public function setDetecDetail($detecDetail){
		$this->detecDetail = $detecDetail;
         $this->apiParas["detecDetail"] = $detecDetail;
	}

	public function getDetecDetail(){
	  return $this->detecDetail;
	}

                        	                   			private $detecResult;
    	                        
	public function setDetecResult($detecResult){
		$this->detecResult = $detecResult;
         $this->apiParas["detecResult"] = $detecResult;
	}

	public function getDetecResult(){
	  return $this->detecResult;
	}

                        	                   			private $detecPic;
    	                        
	public function setDetecPic($detecPic){
		$this->detecPic = $detecPic;
         $this->apiParas["detecPic"] = $detecPic;
	}

	public function getDetecPic(){
	  return $this->detecPic;
	}

                            }





        
 

