<?php
namespace AdsDspRtbKuaicheAddKeywordsNegative;
class ParamExt{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.ParamExt";
    }
        
    private $requestFrom;
    
    public function setRequestFrom($requestFrom){
        $this->params['requestFrom'] = $requestFrom;
    }

    public function getRequestFrom(){
        return $this->requestFrom;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $appKey;
    
    public function setAppKey($appKey){
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey(){
        return $this->appKey;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $accessPin;
    
    public function setAccessPin($accessPin){
        $this->params['accessPin'] = $accessPin;
    }

    public function getAccessPin(){
        return $this->accessPin;
    }
            
    private $authType;
    
    public function setAuthType($authType){
        $this->params['authType'] = $authType;
    }

    public function getAuthType(){
        return $this->authType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>