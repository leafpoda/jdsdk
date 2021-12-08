<?php
class PointsJosBatchInsertOrUpdateRuleRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.points.jos.batchInsertOrUpdateRule";
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
                                                             	                        	                                                                                                                                                                                                                                                                                                                                                                        private $ruleId;
                              public function setRuleId($ruleId ){
                 $this->ruleId=$ruleId;
                 $this->apiParas["ruleId"] = $ruleId;
              }

              public function getRuleId(){
              	return $this->ruleId;
              }
                                                                                                                                                                                                                                                                                                                                              private $multiple;
                              public function setMultiple($multiple ){
                 $this->multiple=$multiple;
                 $this->apiParas["multiple"] = $multiple;
              }

              public function getMultiple(){
              	return $this->multiple;
              }
                                                                                                                                                                                                                                                                                                                                              private $points;
                              public function setPoints($points ){
                 $this->points=$points;
                 $this->apiParas["points"] = $points;
              }

              public function getPoints(){
              	return $this->points;
              }
                                                                                                                                                                                                                                                                                                                                              private $createTime;
                              public function setCreateTime($createTime ){
                 $this->createTime=$createTime;
                 $this->apiParas["createTime"] = $createTime;
              }

              public function getCreateTime(){
              	return $this->createTime;
              }
                                                                                                                                                                                                                                                                                                                                              private $modifyTime;
                              public function setModifyTime($modifyTime ){
                 $this->modifyTime=$modifyTime;
                 $this->apiParas["modifyTime"] = $modifyTime;
              }

              public function getModifyTime(){
              	return $this->modifyTime;
              }
                                                                                                                }





        
 

