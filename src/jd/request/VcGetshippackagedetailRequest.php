<?php
class VcGetshippackagedetailRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.getshippackagedetail";
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
                                                        		                                    	                   			private $packageId;
    	                                                            
	public function setPackageId($packageId){
		$this->packageId = $packageId;
         $this->apiParas["package_id"] = $packageId;
	}

	public function getPackageId(){
	  return $this->packageId;
	}

                        	                            }





        
 

