<?php
class UserController extends ControllerBase
{
    public function testAction(){
        $user = User::find()->toArray();
        dump($user);

    }
    public function getUserAction(){}
    public function newUserAction(){}
}