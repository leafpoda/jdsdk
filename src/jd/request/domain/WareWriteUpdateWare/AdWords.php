<?php
namespace WareWriteUpdateWare;
class AdWords{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.ware.ic.api.domain.AdWords";
    }
        
    private $url;
    
    public function setUrl($url){
        $this->params['url'] = $url;
    }

    public function getUrl(){
        return $this->url;
    }
            
    private $urlWords;
    
    public function setUrlWords($urlWords){
        $this->params['urlWords'] = $urlWords;
    }

    public function getUrlWords(){
        return $this->urlWords;
    }
            
    private $words;
    
    public function setWords($words){
        $this->params['words'] = $words;
    }

    public function getWords(){
        return $this->words;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>