<?php
namespace AdsDspRtbTpBatchUpdateCampaignStatusV2;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.CampaignVO";
    }
        
    private $campaignIds;
                        
    public function setCampaignIds($campaignIds){
        $this->params['campaignIds'] = $campaignIds;
    }
                    
            
    private $status;
    
    public function setStatus($status){
        $this->params['status'] = $status;
    }

    public function getStatus(){
        return $this->status;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>