<?php
/*
Developer : Andy Resta Pradika
Email     : mail@andyresta.com
Website   : www.andyresta.com
Github    : https://github.com/andyresta
Version   : 1.0
*/
Class GoogleMapApiServerSide{
  private $api_key = '';
  function __construct() {
    $this->api_key = 'AIzaSyAigUXwdBTeeNNYgmFBhnKcUGxViyZasq8'; 
  }
  function get_detail_place_by_searchterm($searchterm,$type='object'){
    $searchterm=str_replace(" ", "%20", $searchterm);
    $url = 'https://maps.googleapis.com/maps/api/geocode/json?address='.$searchterm.'&key='.$this->api_key;
    $result=file_get_contents($url);  
    if($type=='object'){
      $details = json_decode($result);
      return $details;
    }else if($type=="json"){
      return $result;
    }else{
      return "Not Support Output Format"; 
    }
  }
  function get_detail_place_by_lnglat($lnglat,$type='object'){
    $url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='.$lnglat.'&&key='.$this->api_key;
    $result=file_get_contents($url);  
    if($type=='object'){
      $details = json_decode($result);
      return $details;
    }else if($type=="json"){
      return $result;
    }else{
      return "Not Support Output Format"; 
    }
  }
  function get_suggestion_place($searchterm,$type='object'){
    $searchterm=str_replace(" ", "%20", $searchterm);
    $url = 'https://maps.googleapis.com/maps/api/place/autocomplete/json?input='.$searchterm.'&types=establishment&key='.$this->api_key;
    $result=file_get_contents($url);  
    if($type=='object'){
      $details = json_decode($result);
      return $details;
    }else if($type=="json"){
      return $result;
    }else{
      return "Not Support Output Format"; 
    }
  }
  function get_distance_two_place($lnglat1,$lnglat2,$type='object',$mode='driving'){
    $url = 'https://maps.googleapis.com/maps/api/distancematrix/json?origins='.$lnglat1.'&destinations='.$lnglat2.'&mode='.$mode.'&language=pl-PL&key='.$this->api_key;
    $result=file_get_contents($url);  
    if($type=='object'){
      $details = json_decode($result);
      return $details;
    }else if($type=="json"){
      return $result;
    }else{
      return "Not Support Output Format"; 
    }
  }
}
$g=new GoogleMapApiServerSide();
 // echo $g->get_detail_place_by_searchterm("bank jateng cabang kudus","json");

// echo $g->get_detail_place_by_lnglat("-6.9843281,110.4093032","json");

// echo $g->get_suggestion_place("bank jateng cabang kudus","json");

// echo $g->get_distance_two_place("-6.9843281,110.4093032","-6.9902904,110.4229372","json");

?>
