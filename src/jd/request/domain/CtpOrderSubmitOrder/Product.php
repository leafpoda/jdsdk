<?php
namespace CtpOrderSubmitOrder;
class Product{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.order.api.bean.Product";
    }
        
    private $mainSku;
            
    public function setMainSku($mainSku){
        $this->params['mainSku'] = $mainSku ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>