<?php
namespace AdsDspRtbKuaicheUpdateTcpa;
class AdGroupVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AdGroupVO";
    }
        
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
    }
            
    private $tcpaBid;
    
    public function setTcpaBid($tcpaBid){
        $this->params['tcpaBid'] = $tcpaBid;
    }

    public function getTcpaBid(){
        return $this->tcpaBid;
    }
            
    private $automatedBiddingType;
    
    public function setAutomatedBiddingType($automatedBiddingType){
        $this->params['automatedBiddingType'] = $automatedBiddingType;
    }

    public function getAutomatedBiddingType(){
        return $this->automatedBiddingType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>