<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: rashiqul
 * Date: 3/8/19
 * Time: 9:50 AM
 */
require APPPATH . '/libraries/JWT.php';

class implementJWT
{
	PRIVATE $key = 'jwt_test';

	public function GenerateToken($data){
		$jwt = JWT::encode($data, $this->key);
		return $jwt;
	}

	public function DecodeToken($token){
		$decode = JWT::decode($token, $this->key, array('HS256'));
		$decodeData = (array) $decode;
		return $decodeData;
	}
}
