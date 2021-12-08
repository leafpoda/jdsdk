<?php
namespace CtpOrderSubmitOrder;
class PlatformSettle{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.order.api.bean.PlatformSettle";
    }
        
    private $settleModel;
    
    public function setSettleModel($settleModel){
        $this->params['settleModel'] = $settleModel;
    }

    public function getSettleModel(){
        return $this->settleModel;
    }
            
    private $commissionList;
                                        
    public function setCommissionList($commissionList){
        $size = count($commissionList);
        for ($i=0; $i<$size; $i++){
            $commissionList [$i] = $commissionList [$i] ->getInstance();
        }
        $this->params['commissionList'] = $commissionList;
    }
                                    
            
    private $subsidyList;
                                        
    public function setSubsidyList($subsidyList){
        $size = count($subsidyList);
        for ($i=0; $i<$size; $i++){
            $subsidyList [$i] = $subsidyList [$i] ->getInstance();
        }
        $this->params['subsidyList'] = $subsidyList;
    }
                                    
            
    private $platformPointsFee;
    
    public function setPlatformPointsFee($platformPointsFee){
        $this->params['platformPointsFee'] = $platformPointsFee;
    }

    public function getPlatformPointsFee(){
        return $this->platformPointsFee;
    }
            
    private $platformPointsRatio;
    
    public function setPlatformPointsRatio($platformPointsRatio){
        $this->params['platformPointsRatio'] = $platformPointsRatio;
    }

    public function getPlatformPointsRatio(){
        return $this->platformPointsRatio;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>