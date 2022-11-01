<?php
namespace AdsDspRtbCommonAdUploadPicByStringV2;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.UploadPicVO";
    }
        
    private $uploadString;
    
    public function setUploadString($uploadString){
        $this->params['uploadString'] = $uploadString;
    }

    public function getUploadString(){
        return $this->uploadString;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>