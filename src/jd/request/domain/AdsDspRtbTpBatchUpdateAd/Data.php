<?php
namespace AdsDspRtbTpBatchUpdateAd;
class Data{

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
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>