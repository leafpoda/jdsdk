<?php
namespace CtpOrderGetShipmentType;
class ApiShipmentTypeParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.order.api.param.ApiShipmentTypeParam";
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
            
    private $address;
            
    public function setAddress($address){
        $this->params['address'] = $address ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>