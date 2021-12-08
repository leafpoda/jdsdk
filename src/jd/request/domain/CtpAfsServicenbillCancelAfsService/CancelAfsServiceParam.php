<?php
namespace CtpAfsServicenbillCancelAfsService;
class CancelAfsServiceParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.aftersales.rpc.jos.bill.CancelAfsServiceParam";
    }
        
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $afsServiceId;
    
    public function setAfsServiceId($afsServiceId){
        $this->params['afsServiceId'] = $afsServiceId;
    }

    public function getAfsServiceId(){
        return $this->afsServiceId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>