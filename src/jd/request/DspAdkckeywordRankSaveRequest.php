<?php
class DspAdkckeywordRankSaveRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adkckeyword.rank.save";
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
                                    	                                            		                                    	                   			private $searchPromoteRankEnable;
    	                        
	public function setSearchPromoteRankEnable($searchPromoteRankEnable){
		$this->searchPromoteRankEnable = $searchPromoteRankEnable;
         $this->apiParas["searchPromoteRankEnable"] = $searchPromoteRankEnable;
	}

	public function getSearchPromoteRankEnable(){
	  return $this->searchPromoteRankEnable;
	}

                        	                   			private $searchPromoteRankType;
    	                        
	public function setSearchPromoteRankType($searchPromoteRankType){
		$this->searchPromoteRankType = $searchPromoteRankType;
         $this->apiParas["searchPromoteRankType"] = $searchPromoteRankType;
	}

	public function getSearchPromoteRankType(){
	  return $this->searchPromoteRankType;
	}

                        	                   			private $searchPromoteRankCoef;
    	                        
	public function setSearchPromoteRankCoef($searchPromoteRankCoef){
		$this->searchPromoteRankCoef = $searchPromoteRankCoef;
         $this->apiParas["searchPromoteRankCoef"] = $searchPromoteRankCoef;
	}

	public function getSearchPromoteRankCoef(){
	  return $this->searchPromoteRankCoef;
	}

                        	                   	                    		private $ids;
    	                        
	public function setIds($ids){
		$this->ids = $ids;
         $this->apiParas["ids"] = $ids;
	}

	public function getIds(){
	  return $this->ids;
	}

                            }





        
 

