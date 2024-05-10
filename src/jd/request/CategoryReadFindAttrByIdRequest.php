<?php
class CategoryReadFindAttrByIdRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.category.read.findAttrById";
	}
	
	public function getApiParas(){
        if(empty($this->apiParas)){
	        return "{}";
	    }
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
    public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
    private  $clientInfo;

    public function setClientInfo($clientInfo){
        $this->apiParas['clientInfo'] = $clientInfo;
    }
    public function getClientInfo(){
        return $this->apiParas['clientInfo'];
    }
    private  $attrId;

    public function setAttrId($attrId){
        $this->apiParas['attrId'] = $attrId;
    }
    public function getAttrId(){
        return $this->apiParas['attrId'];
    }
    private  $field;

    public function setField($field){
        $this->apiParas['field'] = $field;
    }
    public function getField(){
        return $this->apiParas['field'];
    }
}

?>