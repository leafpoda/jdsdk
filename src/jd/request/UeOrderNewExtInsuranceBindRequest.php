<?php
class UeOrderNewExtInsuranceBindRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.order.new.extInsuranceBind";
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
                                                        		                                    	                   			private $bindStat;
    	                        
	public function setBindStat($bindStat){
		$this->bindStat = $bindStat;
         $this->apiParas["bindStat"] = $bindStat;
	}

	public function getBindStat(){
	  return $this->bindStat;
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

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $orderNos;
                              public function setOrderNos($orderNos ){
                 $this->orderNos=$orderNos;
                 $this->apiParas["orderNos"] = $orderNos;
              }

              public function getOrderNos(){
              	return $this->orderNos;
              }
                                                                                                                }





        
 

