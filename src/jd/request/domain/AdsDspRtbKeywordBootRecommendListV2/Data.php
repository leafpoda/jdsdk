<?php
namespace AdsDspRtbKeywordBootRecommendListV2;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.keyword.KeywordRecommendVO";
    }
        
    private $keyWord;
    
    public function setKeyWord($keyWord){
        $this->params['keyWord'] = $keyWord;
    }

    public function getKeyWord(){
        return $this->keyWord;
    }
            
    private $adGroupId;
    
    public function setAdGroupId($adGroupId){
        $this->params['adGroupId'] = $adGroupId;
    }

    public function getAdGroupId(){
        return $this->adGroupId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>