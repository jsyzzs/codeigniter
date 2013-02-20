<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 13-2-20
 * Time: 下午4:39
 * To change this template use File | Settings | File Templates.
 */
class Loginclass extends CI_Model
{
    function __construct(){
        $table = "kp_user";
        $dateline = time();
    }

    /*
     * 登录
     */
    public function login($username,$password,$email){
        echo "1111";
        $this->functions->test();


    }
    /*
     * 注销
     */
    public function loginout(){

    }
    /*
     * 用户查询
     */
    public function userinfo($id='',$password='',$email=''){
        if(!empty($id)){

        }

    }

    public  function updateUser($id,$upList){

    }
}
