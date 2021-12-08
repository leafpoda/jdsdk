<?php
class HostingdataJddpDataAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.hostingdata.jddp.data.add";
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

    private  $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                                        		                                    	                   			private $tableName;
    	                        
	public function setTableName($tableName){
		$this->tableName = $tableName;
         $this->apiParas["tableName"] = $tableName;
	}

	public function getTableName(){
	  return $this->tableName;
	}

                        	                   			private $dataList;
    	                        
	public function setDataList($dataList){
		$this->dataList = $dataList;
         $this->apiParas["dataList"] = $dataList;
	}

	public function getDataList(){
	  return $this->dataList;
	}

                        	                            }





        
 

