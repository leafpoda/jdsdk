<?php
namespace AdsDspRtbKeywordPriceUpdateV2;
class Vo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.keyword.KeywordUpdatePriceVO";
    }
        
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
            
    private $change;
    
    public function setChange($change){
        $this->params['change'] = $change;
    }

    public function getChange(){
        return $this->change;
    }
            
    private $keywordPrice;
    
    public function setKeywordPrice($keywordPrice){
        $this->params['keywordPrice'] = $keywordPrice;
    }

    public function getKeywordPrice(){
        return $this->keywordPrice;
    }
            
    private $devType;
    
    public function setDevType($devType){
        $this->params['devType'] = $devType;
    }

    public function getDevType(){
        return $this->devType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>