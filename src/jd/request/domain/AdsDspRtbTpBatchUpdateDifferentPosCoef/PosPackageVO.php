<?php
namespace AdsDspRtbTpBatchUpdateDifferentPosCoef;
class PosPackageVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.dmp.DmpVO";
    }
        
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
    }
            
    private $coef;
    
    public function setCoef($coef){
        $this->params['coef'] = $coef;
    }

    public function getCoef(){
        return $this->coef;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>