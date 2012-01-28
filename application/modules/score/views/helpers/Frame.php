<?php
/**
 *
 * @author zircote
 * @version 
 */
require_once 'Zend/View/Interface.php';
/**
 * Frame helper
 *
 * @uses viewHelper Zend_View_Helper
 */
class Zend_View_Helper_Frame
{
    /**
     *
     * @var Zend_View_Interface
     */
    public $view;
    
    public function frame ($throw)
    {
        return $this->view->partial('/partials/frame1-9.phtml',$throw);
    }
    /**
     * Sets the view field
     * 
     * @param $view Zend_View_Interface           
     */
    public function setView (Zend_View_Interface $view)
    {
        $this->view = $view;
    }
}
