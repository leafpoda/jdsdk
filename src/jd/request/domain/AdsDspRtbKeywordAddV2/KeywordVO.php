<?php
namespace AdsDspRtbKeywordAddV2;
class KeywordVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.keyword.KeywordVO";
    }
        
    private $keywordName;
    
    public function setKeywordName($keywordName){
        $this->params['keywordName'] = $keywordName;
    }

    public function getKeywordName(){
        return $this->keywordName;
    }
            
    private $keywordPrice;
    
    public function setKeywordPrice($keywordPrice){
        $this->params['keywordPrice'] = $keywordPrice;
    }

    public function getKeywordPrice(){
        return $this->keywordPrice;
    }
            
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>