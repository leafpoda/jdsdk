<?php
class DspCreativeMaterialJosApiServiceDeleteByIdRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.creative.MaterialJosApiService.deleteById";
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
                                    	                                                 	                        	                                                                                                                                                                                                                                                                                        private $materialId;
                              public function setMaterialId($materialId ){
                 $this->materialId=$materialId;
                 $this->apiParas["materialId"] = $materialId;
              }

              public function getMaterialId(){
              	return $this->materialId;
              }
                                                                                                                }





        
 

