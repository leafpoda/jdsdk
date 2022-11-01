<?php
namespace AdsDspRtbTpUpdateFeeV2;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AdGroupVO";
    }
        
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
    }
            
    private $feeDecimal;
    
    public function setFeeDecimal($feeDecimal){
        $this->params['feeDecimal'] = $feeDecimal;
    }

    public function getFeeDecimal(){
        return $this->feeDecimal;
    }
            
    private $recommendTcpaBid;
    
    public function setRecommendTcpaBid($recommendTcpaBid){
        $this->params['recommendTcpaBid'] = $recommendTcpaBid;
    }

    public function getRecommendTcpaBid(){
        return $this->recommendTcpaBid;
    }
            
    private $premiumCoef;
    
    public function setPremiumCoef($premiumCoef){
        $this->params['premiumCoef'] = $premiumCoef;
    }

    public function getPremiumCoef(){
        return $this->premiumCoef;
    }
            
    private $dayCost;
    
    public function setDayCost($dayCost){
        $this->params['dayCost'] = $dayCost;
    }

    public function getDayCost(){
        return $this->dayCost;
    }
            
    private $biddingControlType;
    
    public function setBiddingControlType($biddingControlType){
        $this->params['biddingControlType'] = $biddingControlType;
    }

    public function getBiddingControlType(){
        return $this->biddingControlType;
    }
            
    private $tcpaMaxClickBid;
    
    public function setTcpaMaxClickBid($tcpaMaxClickBid){
        $this->params['tcpaMaxClickBid'] = $tcpaMaxClickBid;
    }

    public function getTcpaMaxClickBid(){
        return $this->tcpaMaxClickBid;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>