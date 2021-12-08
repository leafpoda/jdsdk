<?php
class DataVenderUserpackIsvMultiuploadEndRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.userpack.isv.multiupload.end";
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
                                                        		                                    	                        	                        	                   			private $uploadId;
    	                                                            
	public function setUploadId($uploadId){
		$this->uploadId = $uploadId;
         $this->apiParas["upload_id"] = $uploadId;
	}

	public function getUploadId(){
	  return $this->uploadId;
	}

                        	                        	                   			private $resultName;
    	                                                            
	public function setResultName($resultName){
		$this->resultName = $resultName;
         $this->apiParas["result_name"] = $resultName;
	}

	public function getResultName(){
	  return $this->resultName;
	}

                        	                   			private $resultDesc;
    	                                                            
	public function setResultDesc($resultDesc){
		$this->resultDesc = $resultDesc;
         $this->apiParas["result_desc"] = $resultDesc;
	}

	public function getResultDesc(){
	  return $this->resultDesc;
	}

                        	                   			private $lastPartNumber;
    	                                                                        
	public function setLastPartNumber($lastPartNumber){
		$this->lastPartNumber = $lastPartNumber;
         $this->apiParas["last_part_number"] = $lastPartNumber;
	}

	public function getLastPartNumber(){
	  return $this->lastPartNumber;
	}

                        	                   			private $dataType;
    	                                                            
	public function setDataType($dataType){
		$this->dataType = $dataType;
         $this->apiParas["data_type"] = $dataType;
	}

	public function getDataType(){
	  return $this->dataType;
	}

                            }





        
 

