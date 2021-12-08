<?php
class DataVenderUserpackIsvMultiuploadProcessRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.userpack.isv.multiupload.process";
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

                        	                   			private $bytes;
    	                        
	public function setBytes($bytes){
		$this->bytes = $bytes;
         $this->apiParas["bytes"] = $bytes;
	}

	public function getBytes(){
	  return $this->bytes;
	}

                        	                   			private $length;
    	                        
	public function setLength($length){
		$this->length = $length;
         $this->apiParas["length"] = $length;
	}

	public function getLength(){
	  return $this->length;
	}

                        	                   			private $partNumber;
    	                                                            
	public function setPartNumber($partNumber){
		$this->partNumber = $partNumber;
         $this->apiParas["part_number"] = $partNumber;
	}

	public function getPartNumber(){
	  return $this->partNumber;
	}

                        	                   			private $md5;
    	                        
	public function setMd5($md5){
		$this->md5 = $md5;
         $this->apiParas["md5"] = $md5;
	}

	public function getMd5(){
	  return $this->md5;
	}

                            }





        
 

