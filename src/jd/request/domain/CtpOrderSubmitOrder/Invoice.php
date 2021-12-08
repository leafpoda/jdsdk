<?php
namespace CtpOrderSubmitOrder;
class Invoice{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.order.api.bean.Invoice";
    }
        
    private $invoiceType;
    
    public function setInvoiceType($invoiceType){
        $this->params['invoiceType'] = $invoiceType;
    }

    public function getInvoiceType(){
        return $this->invoiceType;
    }
            
    private $vatInvoice;
            
    public function setVatInvoice($vatInvoice){
        $this->params['vatInvoice'] = $vatInvoice ->getInstance();
    }
        
            
    private $electronicInvoice;
            
    public function setElectronicInvoice($electronicInvoice){
        $this->params['electronicInvoice'] = $electronicInvoice ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>