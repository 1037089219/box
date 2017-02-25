<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/24 0024
 * Time: 下午 2:27
 */

namespace frontend\controllers;


class AccountContrlller extends Controller
{
    public $layout =false;
    public function Query()
    {
        $accountDao = new a query
    returen $this->render('index',$data);

    }

    public function getAccountById($account_id)
    {
        $accoutDao = new accountDao();
        $data = accountDao.$this->getAccountById($account_id)
            return $this->render('detail',$data);
    }

    public function insertAccount($request){
        $accountDao =new accountDao();
        $bRet = $accountDao.$this->insertAccount($account_id)
    }

    public function updateAccount(){
        $accountDao = new accountDao();
        $bRet = $accountDao.$this->insertAccount($account_id)
            //show json
    }

    public function deleteAccountId(){
        $accountDao = new accountDao();
        $bRet = $accountDao.$this->deleteAccountById($account_id)
            //show json
    }

}