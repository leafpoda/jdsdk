<?php
namespace KplOpenTradeScalubuyQiangsite;
class QiangSiteReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kepler.trade.sdk.export.scalebuy.domain.QiangSiteReq";
    }
        
    private $source;
    
    public function setSource($source){
        $this->params['source'] = $source;
    }

    public function getSource(){
        return $this->source;
    }
            
    private $promotionIds;
                        
    public function setPromotionIds($promotionIds){
        $this->params['promotionIds'] = $promotionIds;
    }
                    
    
    function getInstance(){
        return $this->params;
    }

}

?>