<?php
class PopVideoInfoUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.video.info.update";
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
                                                        		                                    	                        	                   			private $videoId;
    	                                                            
	public function setVideoId($videoId){
		$this->videoId = $videoId;
         $this->apiParas["video_id"] = $videoId;
	}

	public function getVideoId(){
	  return $this->videoId;
	}

                        	                   			private $videoType;
    	                                                            
	public function setVideoType($videoType){
		$this->videoType = $videoType;
         $this->apiParas["video_type"] = $videoType;
	}

	public function getVideoType(){
	  return $this->videoType;
	}

                        	                   			private $videoName;
    	                                                            
	public function setVideoName($videoName){
		$this->videoName = $videoName;
         $this->apiParas["video_name"] = $videoName;
	}

	public function getVideoName(){
	  return $this->videoName;
	}

                        	                   			private $videoDesc;
    	                                                            
	public function setVideoDesc($videoDesc){
		$this->videoDesc = $videoDesc;
         $this->apiParas["video_desc"] = $videoDesc;
	}

	public function getVideoDesc(){
	  return $this->videoDesc;
	}

                                                                        		                                    	                        	                        	                        	                            }





        
 

