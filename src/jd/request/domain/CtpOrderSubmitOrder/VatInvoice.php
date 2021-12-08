<?php
namespace CtpOrderSubmitOrder;
class VatInvoice{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.order.api.bean.VATInvoice";
    }
        
    private $companyName;
    
    public function setCompanyName($companyName){
        $this->params['companyName'] = $companyName;
    }

    public function getCompanyName(){
        return $this->companyName;
    }
            
    private $code;
    
    public function setCode($code){
        $this->params['code'] = $code;
    }

    public function getCode(){
        return $this->code;
    }
            
    private $regAddr;
    
    public function setRegAddr($regAddr){
        $this->params['regAddr'] = $regAddr;
    }

    public function getRegAddr(){
        return $this->regAddr;
    }
            
    private $regPhone;
    
    public function setRegPhone($regPhone){
        $this->params['regPhone'] = $regPhone;
    }

    public function getRegPhone(){
        return $this->regPhone;
    }
            
    private $regBank;
    
    public function setRegBank($regBank){
        $this->params['regBank'] = $regBank;
    }

    public function getRegBank(){
        return $this->regBank;
    }
            
    private $regBankAccount;
    
    public function setRegBankAccount($regBankAccount){
        $this->params['regBankAccount'] = $regBankAccount;
    }

    public function getRegBankAccount(){
        return $this->regBankAccount;
    }
            
    private $consigneeName;
    
    public function setConsigneeName($consigneeName){
        $this->params['consigneeName'] = $consigneeName;
    }

    public function getConsigneeName(){
        return $this->consigneeName;
    }
            
    private $consigneeMobile;
    
    public function setConsigneeMobile($consigneeMobile){
        $this->params['consigneeMobile'] = $consigneeMobile;
    }

    public function getConsigneeMobile(){
        return $this->consigneeMobile;
    }
            
    private $vatAddress;
            
    public function setVatAddress($vatAddress){
        $this->params['vatAddress'] = $vatAddress ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>