<?php
namespace AdsDspRtbKeywordUpdatePerKeywordV2;
class KeywordVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.keyword.KeywordVO";
    }
        
    private $keywordMobilePrice;
    
    public function setKeywordMobilePrice($keywordMobilePrice){
        $this->params['keywordMobilePrice'] = $keywordMobilePrice;
    }

    public function getKeywordMobilePrice(){
        return $this->keywordMobilePrice;
    }
            
    private $keywordPrice;
    
    public function setKeywordPrice($keywordPrice){
        $this->params['keywordPrice'] = $keywordPrice;
    }

    public function getKeywordPrice(){
        return $this->keywordPrice;
    }
            
    private $adGroupId;
    
    public function setAdGroupId($adGroupId){
        $this->params['adGroupId'] = $adGroupId;
    }

    public function getAdGroupId(){
        return $this->adGroupId;
    }
            
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
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