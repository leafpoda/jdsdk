<?php
class MarketBdpSaleVenderSkuRankQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.market.bdp.saleVenderSkuRank.query";
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
                                    	                                            		                                    	                   			private $opTime;
    	                        
	public function setOpTime($opTime){
		$this->opTime = $opTime;
         $this->apiParas["opTime"] = $opTime;
	}

	public function getOpTime(){
	  return $this->opTime;
	}

                        	                        	                   			private $tp;
    	                        
	public function setTp($tp){
		$this->tp = $tp;
         $this->apiParas["tp"] = $tp;
	}

	public function getTp(){
	  return $this->tp;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $field;
                              public function setField($field ){
                 $this->field=$field;
                 $this->apiParas["field"] = $field;
              }

              public function getField(){
              	return $this->field;
              }
                                                                                                                }





        
 

