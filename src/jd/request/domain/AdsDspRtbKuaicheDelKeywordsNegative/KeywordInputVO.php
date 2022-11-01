<?php
namespace AdsDspRtbKuaicheDelKeywordsNegative;
class KeywordInputVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.keyword.KeywordInputVO";
    }
        
    private $list;
                                        
    public function setList($list){
        $size = count($list);
        for ($i=0; $i<$size; $i++){
            $list [$i] = $list [$i] ->getInstance();
        }
        $this->params['list'] = $list;
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