<?php
    if(isset($_REQUEST["locationname"])) {
        $locationname = $_REQUEST["locationname"];
        
        $url = "https://maps.googleapis.com/maps/api/place/textsearch/json?query=$locationname&key=AIzaSyCadsJSYPwjR78DYcgRxJOuDDDgry9F8FQ";                        
//        $url = "http://www.mapquestapi.com/geocoding/v1/address?key=qM11jHQAGAVleiqTwFrGob4hrCIh2XHv&callback=renderOptions&inFormat=kvp&outFormat=json&location=$locationname";

        $json = file_get_contents($url);
        $result = json_decode($json);
        if($result->status == "OK") {
            $res = $result->results;
            echo $res[0]->name . "#";
            echo $res[0]->formatted_address . "#";
            echo $res[0]->geometry->location->lng . "#";
            echo $res[0]->geometry->location->lat;
        }
        else {
            echo "";
        }
    }