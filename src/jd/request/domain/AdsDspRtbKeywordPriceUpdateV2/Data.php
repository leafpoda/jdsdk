<?php
namespace AdsDspRtbKeywordPriceUpdateV2;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.keyword.KeywordVO";
    }
        
    private $ids;
                        
    public function setIds($ids){
        $this->params['ids'] = $ids;
    }
                    
            
    private $campaignType;
    
    public function setCampaignType($campaignType){
        $this->params['campaignType'] = $campaignType;
    }

    public function getCampaignType(){
        return $this->campaignType;
    }
            
    private $putType;
    
    public function setPutType($putType){
        $this->params['putType'] = $putType;
    }

    public function getPutType(){
        return $this->putType;
    }
            
    private $priceList;
                                        
    public function setPriceList($priceList){
        $size = count($priceList);
        for ($i=0; $i<$size; $i++){
            $priceList [$i] = $priceList [$i] ->getInstance();
        }
        $this->params['priceList'] = $priceList;
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