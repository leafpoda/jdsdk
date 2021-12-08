<?php
class DataVenderUserpackIsvMultiuploadStartRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.userpack.isv.multiupload.start";
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
                                                        		                                    	                        	                        	                   			private $fileType;
    	                                                            
	public function setFileType($fileType){
		$this->fileType = $fileType;
         $this->apiParas["file_type"] = $fileType;
	}

	public function getFileType(){
	  return $this->fileType;
	}

                        	                   			private $fileSize;
    	                                                            
	public function setFileSize($fileSize){
		$this->fileSize = $fileSize;
         $this->apiParas["file_size"] = $fileSize;
	}

	public function getFileSize(){
	  return $this->fileSize;
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





        
 

