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
        if( Zend_Auth::getInstance()->getInstance()->hasIdentity()){
            $player = Zend_Auth::getInstance()->getStorage()->read();
            print_r($player);
        }
    }


}

