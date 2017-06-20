<?php
use Phalcon\Mvc\View;
class AdminController extends ControllerBase
{
    public function initialize() {
        $NO_LOGIN = false;//TODO
        if($NO_LOGIN) {
            //redirect admin/login
        }
    }
    public function blankAction(){}
    public function indexAction(){}
    public function loginAction(){
        $this->view->setRenderLevel(View::LEVEL_ACTION_VIEW);
    }
    public function userListAction($param){
        $this->view->title = '用户一览';
        $this->view->param = $param;
    }
}