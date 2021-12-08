<?php
namespace CtpOrderSubmitOrder;
class Receiver{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.order.api.bean.Receiver";
    }
        
    private $receiverName;
    
    public function setReceiverName($receiverName){
        $this->params['receiverName'] = $receiverName;
    }

    public function getReceiverName(){
        return $this->receiverName;
    }
            
    private $receiverMobile;
    
    public function setReceiverMobile($receiverMobile){
        $this->params['receiverMobile'] = $receiverMobile;
    }

    public function getReceiverMobile(){
        return $this->receiverMobile;
    }
            
    private $receiverEmail;
    
    public function setReceiverEmail($receiverEmail){
        $this->params['receiverEmail'] = $receiverEmail;
    }

    public function getReceiverEmail(){
        return $this->receiverEmail;
    }
            
    private $zipCode;
    
    public function setZipCode($zipCode){
        $this->params['zipCode'] = $zipCode;
    }

    public function getZipCode(){
        return $this->zipCode;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>