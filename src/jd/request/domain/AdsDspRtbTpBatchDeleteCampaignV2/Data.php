<?php
namespace AdsDspRtbTpBatchDeleteCampaignV2;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.CampaignVO";
    }
        
    private $campaignIds;
                        
    public function setCampaignIds($campaignIds){
        $this->params['campaignIds'] = $campaignIds;
    }
                    
    
    function getInstance(){
        return $this->params;
    }

}

?>