<?php
namespace JingdongAdsDspRtbKeywordInfo;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.keyword.KeywordRecommendVO";
    }
        
    private $keywords;
                        
    public function setKeywords($keywords){
        $this->params['keywords'] = $keywords;
    }
                    
            
    private $campaignType;
    
    public function setCampaignType($campaignType){
        $this->params['campaignType'] = $campaignType;
    }

    public function getCampaignType(){
        return $this->campaignType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>