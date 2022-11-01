<?php
namespace AdsDspRtbKcBatchUpdateProductDeliveryPrice;
class Attribute{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.PriceChangeVO";
    }
        
    private $devType;
    
    public function setDevType($devType){
        $this->params['devType'] = $devType;
    }

    public function getDevType(){
        return $this->devType;
    }
            
    private $number;
    
    public function setNumber($number){
        $this->params['number'] = $number;
    }

    public function getNumber(){
        return $this->number;
    }
            
    private $change;
    
    public function setChange($change){
        $this->params['change'] = $change;
    }

    public function getChange(){
        return $this->change;
    }
            
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>