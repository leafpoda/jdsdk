<?php
namespace KplOpenTradeMasterInsertaddress;
class AddressDomain{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kepler.trade.sdk.export.master.address.domain.Address";
    }
        
    private $addressId;
    
    public function setAddressId($addressId){
        $this->params['addressId'] = $addressId;
    }

    public function getAddressId(){
        return $this->addressId;
    }
            
    private $addressType;
    
    public function setAddressType($addressType){
        $this->params['addressType'] = $addressType;
    }

    public function getAddressType(){
        return $this->addressType;
    }
            
    private $userName;
    
    public function setUserName($userName){
        $this->params['userName'] = $userName;
    }

    public function getUserName(){
        return $this->userName;
    }
            
    private $provinceId;
    
    public function setProvinceId($provinceId){
        $this->params['provinceId'] = $provinceId;
    }

    public function getProvinceId(){
        return $this->provinceId;
    }
            
    private $cityId;
    
    public function setCityId($cityId){
        $this->params['cityId'] = $cityId;
    }

    public function getCityId(){
        return $this->cityId;
    }
            
    private $countyId;
    
    public function setCountyId($countyId){
        $this->params['countyId'] = $countyId;
    }

    public function getCountyId(){
        return $this->countyId;
    }
            
    private $townId;
    
    public function setTownId($townId){
        $this->params['townId'] = $townId;
    }

    public function getTownId(){
        return $this->townId;
    }
            
    private $mobile;
    
    public function setMobile($mobile){
        $this->params['mobile'] = $mobile;
    }

    public function getMobile(){
        return $this->mobile;
    }
            
    private $addressDetail;
    
    public function setAddressDetail($addressDetail){
        $this->params['addressDetail'] = $addressDetail;
    }

    public function getAddressDetail(){
        return $this->addressDetail;
    }
            
    private $provinceName;
    
    public function setProvinceName($provinceName){
        $this->params['provinceName'] = $provinceName;
    }

    public function getProvinceName(){
        return $this->provinceName;
    }
            
    private $cityName;
    
    public function setCityName($cityName){
        $this->params['cityName'] = $cityName;
    }

    public function getCityName(){
        return $this->cityName;
    }
            
    private $countyName;
    
    public function setCountyName($countyName){
        $this->params['countyName'] = $countyName;
    }

    public function getCountyName(){
        return $this->countyName;
    }
            
    private $townName;
    
    public function setTownName($townName){
        $this->params['townName'] = $townName;
    }

    public function getTownName(){
        return $this->townName;
    }
            
    private $postCode;
    
    public function setPostCode($postCode){
        $this->params['postCode'] = $postCode;
    }

    public function getPostCode(){
        return $this->postCode;
    }
            
    private $phone;
    
    public function setPhone($phone){
        $this->params['phone'] = $phone;
    }

    public function getPhone(){
        return $this->phone;
    }
            
    private $email;
    
    public function setEmail($email){
        $this->params['email'] = $email;
    }

    public function getEmail(){
        return $this->email;
    }
            
    private $longitude;
    
    public function setLongitude($longitude){
        $this->params['longitude'] = $longitude;
    }

    public function getLongitude(){
        return $this->longitude;
    }
            
    private $latitude;
    
    public function setLatitude($latitude){
        $this->params['latitude'] = $latitude;
    }

    public function getLatitude(){
        return $this->latitude;
    }
            
    private $coordType;
    
    public function setCoordType($coordType){
        $this->params['coordType'] = $coordType;
    }

    public function getCoordType(){
        return $this->coordType;
    }
            
    private $addressDefault;
    
    public function setAddressDefault($addressDefault){
        $this->params['addressDefault'] = $addressDefault;
    }

    public function getAddressDefault(){
        return $this->addressDefault;
    }
            
    private $addressName;
    
    public function setAddressName($addressName){
        $this->params['addressName'] = $addressName;
    }

    public function getAddressName(){
        return $this->addressName;
    }
            
    private $fullAddress;
    
    public function setFullAddress($fullAddress){
        $this->params['fullAddress'] = $fullAddress;
    }

    public function getFullAddress(){
        return $this->fullAddress;
    }
            
    private $selected;
    
    public function setSelected($selected){
        $this->params['selected'] = $selected;
    }

    public function getSelected(){
        return $this->selected;
    }
            
    private $canSelected;
    
    public function setCanSelected($canSelected){
        $this->params['canSelected'] = $canSelected;
    }

    public function getCanSelected(){
        return $this->canSelected;
    }
            
    private $mobileCode;
    
    public function setMobileCode($mobileCode){
        $this->params['mobileCode'] = $mobileCode;
    }

    public function getMobileCode(){
        return $this->mobileCode;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>