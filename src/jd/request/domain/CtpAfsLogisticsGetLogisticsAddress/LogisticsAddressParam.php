<?php
namespace CtpAfsLogisticsGetLogisticsAddress;
class LogisticsAddressParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.aftersales.rpc.jos.logistics.LogisticsAddressParam";
    }
        
    private $afsServiceId;
    
    public function setAfsServiceId($afsServiceId){
        $this->params['afsServiceId'] = $afsServiceId;
    }

    public function getAfsServiceId(){
        return $this->afsServiceId;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>