<?php
namespace CtpOrderSubmitOrder;
class VatAddress{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.order.api.bean.VatAddress";
    }
        
    private $vatProvinceId;
    
    public function setVatProvinceId($vatProvinceId){
        $this->params['vatProvinceId'] = $vatProvinceId;
    }

    public function getVatProvinceId(){
        return $this->vatProvinceId;
    }
            
    private $vatCityId;
    
    public function setVatCityId($vatCityId){
        $this->params['vatCityId'] = $vatCityId;
    }

    public function getVatCityId(){
        return $this->vatCityId;
    }
            
    private $vatCountyId;
    
    public function setVatCountyId($vatCountyId){
        $this->params['vatCountyId'] = $vatCountyId;
    }

    public function getVatCountyId(){
        return $this->vatCountyId;
    }
            
    private $vatTownId;
    
    public function setVatTownId($vatTownId){
        $this->params['vatTownId'] = $vatTownId;
    }

    public function getVatTownId(){
        return $this->vatTownId;
    }
            
    private $vatFullAddress;
    
    public function setVatFullAddress($vatFullAddress){
        $this->params['vatFullAddress'] = $vatFullAddress;
    }

    public function getVatFullAddress(){
        return $this->vatFullAddress;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>