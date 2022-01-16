<?php
namespace AdsDspRtbKeywordSaveRankBatch;
class KeywordVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.keyword.KeywordInputVO";
    }
        
    private $ids;
                        
    public function setIds($ids){
        $this->params['ids'] = $ids;
    }
                    
            
    private $searchPromoteRankType;
    
    public function setSearchPromoteRankType($searchPromoteRankType){
        $this->params['searchPromoteRankType'] = $searchPromoteRankType;
    }

    public function getSearchPromoteRankType(){
        return $this->searchPromoteRankType;
    }
            
    private $searchPromoteRankEnable;
    
    public function setSearchPromoteRankEnable($searchPromoteRankEnable){
        $this->params['searchPromoteRankEnable'] = $searchPromoteRankEnable;
    }

    public function getSearchPromoteRankEnable(){
        return $this->searchPromoteRankEnable;
    }
            
    private $searchPromoteRankCoef;
    
    public function setSearchPromoteRankCoef($searchPromoteRankCoef){
        $this->params['searchPromoteRankCoef'] = $searchPromoteRankCoef;
    }

    public function getSearchPromoteRankCoef(){
        return $this->searchPromoteRankCoef;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>