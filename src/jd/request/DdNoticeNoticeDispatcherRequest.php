<?php
class DdNoticeNoticeDispatcherRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dd.notice.NoticeDispatcher";
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
                                    	                        	                   			private $token;
    	                        
	public function setToken($token){
		$this->token = $token;
         $this->apiParas["token"] = $token;
	}

	public function getToken(){
	  return $this->token;
	}

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                                            		                                    	                   			private $extend;
    	                        
	public function setExtend($extend){
		$this->extend = $extend;
         $this->apiParas["extend"] = $extend;
	}

	public function getExtend(){
	  return $this->extend;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $receiver;
                              public function setReceiver($receiver ){
                 $this->receiver=$receiver;
                 $this->apiParas["receiver"] = $receiver;
              }

              public function getReceiver(){
              	return $this->receiver;
              }
                                                                                                                                        	                   			private $time;
    	                        
	public function setTime($time){
		$this->time = $time;
         $this->apiParas["time"] = $time;
	}

	public function getTime(){
	  return $this->time;
	}

                        	                   			private $title;
    	                        
	public function setTitle($title){
		$this->title = $title;
         $this->apiParas["title"] = $title;
	}

	public function getTitle(){
	  return $this->title;
	}

                        	                   			private $content;
    	                        
	public function setContent($content){
		$this->content = $content;
         $this->apiParas["content"] = $content;
	}

	public function getContent(){
	  return $this->content;
	}

                        	                   			private $url;
    	                        
	public function setUrl($url){
		$this->url = $url;
         $this->apiParas["url"] = $url;
	}

	public function getUrl(){
	  return $this->url;
	}

                        	                   			private $nType;
    	                        
	public function setNType($nType){
		$this->nType = $nType;
         $this->apiParas["nType"] = $nType;
	}

	public function getNType(){
	  return $this->nType;
	}

                        	                   			private $noticeId;
    	                        
	public function setNoticeId($noticeId){
		$this->noticeId = $noticeId;
         $this->apiParas["noticeId"] = $noticeId;
	}

	public function getNoticeId(){
	  return $this->noticeId;
	}

                            }





        
 

