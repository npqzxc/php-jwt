<?php
/**
 * Created by PhpStorm.
 * User: SMLZN
 * Date: 2018/12/20
 * Time: 5:49 PM
 */
namespace Simon\Test;


use Simon\SRC\JWT;

class test{

    private $key = 'test123';

    public function encode($params){

        $encode = JWT::encode($params,$this->key);
var_dump($encode);
        return $encode;
    }

    public function decode($str){

        $decode = JWT::decode($str,$this->key,array('HS256'));

        return $decode;
    }

}

$a = new test();

$encode = $a->encode(['a'=>123]);