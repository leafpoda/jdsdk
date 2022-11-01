<?php
namespace AdsDspUploadPicV2;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.jos.JosUploadFileVO";
    }
        
    private $uploadFile;
    
    public function setUploadFile($uploadFile){
        $this->params['uploadFile'] = $uploadFile;
    }

    public function getUploadFile(){
        return $this->uploadFile;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>