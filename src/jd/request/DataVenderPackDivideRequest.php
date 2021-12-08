<?php
class DataVenderPackDivideRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.pack.divide";
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
                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               private $subPackRation;
                              public function setSubPackRation($subPackRation ){
                 $this->subPackRation=$subPackRation;
                 $this->apiParas["sub_pack_ration"] = $subPackRation;
              }

              public function getSubPackRation(){
              	return $this->subPackRation;
              }
                                                                                                                                        	                   			private $parentSearchId;
    	                                                                        
	public function setParentSearchId($parentSearchId){
		$this->parentSearchId = $parentSearchId;
         $this->apiParas["parent_search_id"] = $parentSearchId;
	}

	public function getParentSearchId(){
	  return $this->parentSearchId;
	}

                        	                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               private $subPackCnt;
                              public function setSubPackCnt($subPackCnt ){
                 $this->subPackCnt=$subPackCnt;
                 $this->apiParas["sub_pack_cnt"] = $subPackCnt;
              }

              public function getSubPackCnt(){
              	return $this->subPackCnt;
              }
                                                                                                                                        	                            }





        
 

