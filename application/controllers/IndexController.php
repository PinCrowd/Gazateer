<?php
/**
 * 
 * 
 * @author zircote
 *
 */
class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $player = Zend_Auth::getInstance()->getStorage()->read();
        var_dump($player->email, $player->role);
    }


}

