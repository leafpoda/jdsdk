<?php
namespace KplOpenPaybillPresubmit;
class SubmitOrderVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pay.bill.api.kpl.vo.order.SubmitOrderVO";
    }
        
    private $venderOrderNum;
    
    public function setVenderOrderNum($venderOrderNum){
        $this->params['venderOrderNum'] = $venderOrderNum;
    }

    public function getVenderOrderNum(){
        return $this->venderOrderNum;
    }
            
    private $skuModel;
            
    public function setSkuModel($skuModel){
        $this->params['skuModel'] = $skuModel ->getInstance();
    }
        
            
    private $orderFee;
    
    public function setOrderFee($orderFee){
        $this->params['orderFee'] = $orderFee;
    }

    public function getOrderFee(){
        return $this->orderFee;
    }
            
    private $payMethod;
    
    public function setPayMethod($payMethod){
        $this->params['payMethod'] = $payMethod;
    }

    public function getPayMethod(){
        return $this->payMethod;
    }
            
    private $productItemList;
                                        
    public function setProductItemList($productItemList){
        $size = count($productItemList);
        for ($i=0; $i<$size; $i++){
            $productItemList [$i] = $productItemList [$i] ->getInstance();
        }
        $this->params['productItemList'] = $productItemList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>