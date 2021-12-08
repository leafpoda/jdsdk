<?php
namespace CtpOrderGetFreightFee;
class ApiFreightFeeParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.order.api.param.ApiFreightFeeParam";
    }
        
    private $paymentType;
    
    public function setPaymentType($paymentType){
        $this->params['paymentType'] = $paymentType;
    }

    public function getPaymentType(){
        return $this->paymentType;
    }
            
    private $skuList;
                                        
    public function setSkuList($skuList){
        $size = count($skuList);
        for ($i=0; $i<$size; $i++){
            $skuList [$i] = $skuList [$i] ->getInstance();
        }
        $this->params['skuList'] = $skuList;
    }
                                    
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $orderFee;
    
    public function setOrderFee($orderFee){
        $this->params['orderFee'] = $orderFee;
    }

    public function getOrderFee(){
        return $this->orderFee;
    }
            
    private $address;
            
    public function setAddress($address){
        $this->params['address'] = $address ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>