<?php
namespace CtpAfsLogisticsGetLogisticsAddress;
class CtpProtocol{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.tpcc.base.api.protocol.CtpProtocol";
    }
        
    private $customerId;
    
    public function setCustomerId($customerId){
        $this->params['customerId'] = $customerId;
    }

    public function getCustomerId(){
        return $this->customerId;
    }
            
    private $clientPort;
    
    public function setClientPort($clientPort){
        $this->params['clientPort'] = $clientPort;
    }

    public function getClientPort(){
        return $this->clientPort;
    }
            
    private $channelId;
    
    public function setChannelId($channelId){
        $this->params['channelId'] = $channelId;
    }

    public function getChannelId(){
        return $this->channelId;
    }
            
    private $traceId;
    
    public function setTraceId($traceId){
        $this->params['traceId'] = $traceId;
    }

    public function getTraceId(){
        return $this->traceId;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $clientIp;
    
    public function setClientIp($clientIp){
        $this->params['clientIp'] = $clientIp;
    }

    public function getClientIp(){
        return $this->clientIp;
    }
            
    private $appKey;
    
    public function setAppKey($appKey){
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey(){
        return $this->appKey;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>