<?php

namespace AniltonMoraisJr\ItopRestHelper;

class ItopRestHelper {
	
	public function consultaAPIItop($object){
		$url = config('itopresthelper.URL_API_NETADMIN_REST');

        $objectJSON = json_encode($object);
        $client = new \GuzzleHttp\Client();
        $response = $client->post($url, ['body'=>['auth_user' => config('itopresthelper.USER_API_NETADMIN'), 'auth_pwd' => config('itopresthelper.PASS_API_NETADMIN'), 'json_data' => $objectJSON]]);
     
        $obj = $response->json();

         return $obj;
	}

}