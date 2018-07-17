<?php

namespace AniltonMoraisJr\ItopRestHelper;

class ItopRestHelper {
	
	public function consultaAPIItop($object){
		$url = config('itopresthelper.URL_API_REST');

        $objectJSON = json_encode($object);
        $client = new \GuzzleHttp\Client();
        $response = $client->post($url, ['body'=>['auth_user' => config('itopresthelper.USER_API'), 'auth_pwd' => config('itopresthelper.PASS_API'), 'json_data' => $objectJSON]]);
     
        $obj = $response->json();

         return $obj;
	}

}