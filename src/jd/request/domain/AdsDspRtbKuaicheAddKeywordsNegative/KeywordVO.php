<?php
namespace AdsDspRtbKuaicheAddKeywordsNegative;
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
    
    function getInstance(){
        return $this->params;
    }

}

?>