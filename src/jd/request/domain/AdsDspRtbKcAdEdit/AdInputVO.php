<?php
namespace AdsDspRtbKcAdEdit;
class AdInputVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AdInputVO";
    }
        
    private $adList;
                                        
    public function setAdList($adList){
        $size = count($adList);
        for ($i=0; $i<$size; $i++){
            $adList [$i] = $adList [$i] ->getInstance();
        }
        $this->params['adList'] = $adList;
    }
                                    
            
    private $adGroupId;
    
    public function setAdGroupId($adGroupId){
        $this->params['adGroupId'] = $adGroupId;
    }

    public function getAdGroupId(){
        return $this->adGroupId;
    }
            
    private $showSalesWord;
    
    public function setShowSalesWord($showSalesWord){
        $this->params['showSalesWord'] = $showSalesWord;
    }

    public function getShowSalesWord(){
        return $this->showSalesWord;
    }
            
    private $url;
    
    public function setUrl($url){
        $this->params['url'] = $url;
    }

    public function getUrl(){
        return $this->url;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>