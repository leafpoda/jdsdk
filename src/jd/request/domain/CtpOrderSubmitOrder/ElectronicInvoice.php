<?php
namespace CtpOrderSubmitOrder;
class ElectronicInvoice{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.order.api.bean.ElectronicInvoice";
    }
        
    private $selectedInvoiceTitle;
    
    public function setSelectedInvoiceTitle($selectedInvoiceTitle){
        $this->params['selectedInvoiceTitle'] = $selectedInvoiceTitle;
    }

    public function getSelectedInvoiceTitle(){
        return $this->selectedInvoiceTitle;
    }
            
    private $electCompanyName;
    
    public function setElectCompanyName($electCompanyName){
        $this->params['electCompanyName'] = $electCompanyName;
    }

    public function getElectCompanyName(){
        return $this->electCompanyName;
    }
            
    private $electCode;
    
    public function setElectCode($electCode){
        $this->params['electCode'] = $electCode;
    }

    public function getElectCode(){
        return $this->electCode;
    }
            
    private $invoiceConsigneeEmail;
    
    public function setInvoiceConsigneeEmail($invoiceConsigneeEmail){
        $this->params['invoiceConsigneeEmail'] = $invoiceConsigneeEmail;
    }

    public function getInvoiceConsigneeEmail(){
        return $this->invoiceConsigneeEmail;
    }
            
    private $invoiceConsigneePhone;
    
    public function setInvoiceConsigneePhone($invoiceConsigneePhone){
        $this->params['invoiceConsigneePhone'] = $invoiceConsigneePhone;
    }

    public function getInvoiceConsigneePhone(){
        return $this->invoiceConsigneePhone;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>