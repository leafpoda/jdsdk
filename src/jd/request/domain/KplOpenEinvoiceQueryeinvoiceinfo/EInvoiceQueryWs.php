<?php
namespace KplOpenEinvoiceQueryeinvoiceinfo;
class EInvoiceQueryWs{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.fms.ivc.domain.ws.EInvoiceQueryWs";
    }
        
    private $ivcNo;
    
    public function setIvcNo($ivcNo){
        $this->params['ivcNo'] = $ivcNo;
    }

    public function getIvcNo(){
        return $this->ivcNo;
    }
            
    private $ivcCode;
    
    public function setIvcCode($ivcCode){
        $this->params['ivcCode'] = $ivcCode;
    }

    public function getIvcCode(){
        return $this->ivcCode;
    }
            
    private $antiFankCode;
    
    public function setAntiFankCode($antiFankCode){
        $this->params['antiFankCode'] = $antiFankCode;
    }

    public function getAntiFankCode(){
        return $this->antiFankCode;
    }
            
    private $sourceId;
    
    public function setSourceId($sourceId){
        $this->params['sourceId'] = $sourceId;
    }

    public function getSourceId(){
        return $this->sourceId;
    }
            
    private $businessId;
    
    public function setBusinessId($businessId){
        $this->params['businessId'] = $businessId;
    }

    public function getBusinessId(){
        return $this->businessId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>