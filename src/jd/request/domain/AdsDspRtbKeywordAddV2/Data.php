<?php
namespace AdsDspRtbKeywordAddV2;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.keyword.KeywordVO";
    }
        
    private $adGroupId;
    
    public function setAdGroupId($adGroupId){
        $this->params['adGroupId'] = $adGroupId;
    }

    public function getAdGroupId(){
        return $this->adGroupId;
    }
            
    private $keywordList;
                                        
    public function setKeywordList($keywordList){
        $size = count($keywordList);
        for ($i=0; $i<$size; $i++){
            $keywordList [$i] = $keywordList [$i] ->getInstance();
        }
        $this->params['keywordList'] = $keywordList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>