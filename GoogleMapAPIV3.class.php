<?php
$uuu=$_POST['address'];

echo $uuu;
return $uuu;

class GoogleMapAPI {
    var $lookup_service = 'GOOGLE';
    var $lookup_server = 'maps.google.com';
    function geoGetCoords($address) {
				//網址可以抓取座標資訊
                $_url = sprintf('http://%s/maps/api/geocode/json?sensor=%s&address=%s',
								$this->lookup_server, 
								$this->mobile==true?"true":"false",rawurlencode($address));
								$_result = false;
                if($_result = $this->fetchURL($_url)) {
                    $_result_parts = json_decode($_result);
                    if($_result_parts->status!="OK"){
                    	return false;
                    }
                    $_coords['lat'] = $_result_parts->results[0]->geometry->location->lat;
                    $_coords['lon'] = $_result_parts->results[0]->geometry->location->lng;
                }  
        return $_coords;       
    }
    function fetchURL($url) {
        return file_get_contents($url);
    }
}

?>
