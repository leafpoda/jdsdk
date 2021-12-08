<?php
namespace CtpOrderSubmitOrder;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.order.api.param.ApiSubmitOrderParam";
    }
        
    private $channelOrderId;
    
    public function setChannelOrderId($channelOrderId){
        $this->params['channelOrderId'] = $channelOrderId;
    }

    public function getChannelOrderId(){
        return $this->channelOrderId;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $productList;
                                        
    public function setProductList($productList){
        $size = count($productList);
        for ($i=0; $i<$size; $i++){
            $productList [$i] = $productList [$i] ->getInstance();
        }
        $this->params['productList'] = $productList;
    }
                                    
            
    private $orderFee;
    
    public function setOrderFee($orderFee){
        $this->params['orderFee'] = $orderFee;
    }

    public function getOrderFee(){
        return $this->orderFee;
    }
            
    private $freightFee;
    
    public function setFreightFee($freightFee){
        $this->params['freightFee'] = $freightFee;
    }

    public function getFreightFee(){
        return $this->freightFee;
    }
            
    private $address;
            
    public function setAddress($address){
        $this->params['address'] = $address ->getInstance();
    }
        
            
    private $receiver;
            
    public function setReceiver($receiver){
        $this->params['receiver'] = $receiver ->getInstance();
    }
        
            
    private $paymentType;
    
    public function setPaymentType($paymentType){
        $this->params['paymentType'] = $paymentType;
    }

    public function getPaymentType(){
        return $this->paymentType;
    }
            
    private $shipmentType;
    
    public function setShipmentType($shipmentType){
        $this->params['shipmentType'] = $shipmentType;
    }

    public function getShipmentType(){
        return $this->shipmentType;
    }
            
    private $channelOrderSource;
    
    public function setChannelOrderSource($channelOrderSource){
        $this->params['channelOrderSource'] = $channelOrderSource;
    }

    public function getChannelOrderSource(){
        return $this->channelOrderSource;
    }
            
    private $sendGoods;
    
    public function setSendGoods($sendGoods){
        $this->params['sendGoods'] = $sendGoods;
    }

    public function getSendGoods(){
        return $this->sendGoods;
    }
            
    private $invoice;
            
    public function setInvoice($invoice){
        $this->params['invoice'] = $invoice ->getInstance();
    }
        
            
    private $userIp;
    
    public function setUserIp($userIp){
        $this->params['userIp'] = $userIp;
    }

    public function getUserIp(){
        return $this->userIp;
    }
            
    private $platformSettle;
            
    public function setPlatformSettle($platformSettle){
        $this->params['platformSettle'] = $platformSettle ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>