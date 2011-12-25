<?php
/**
 *
 * @author zircote
 * @version 
 */
require_once 'Zend/View/Interface.php';
/**
 * Score1 helper
 *
 * @uses viewHelper Zend_View_Helper
 */
class Zend_View_Helper_Score2
{
    /**
     *
     * @var Zend_View_Interface
     */
    public $view;
    /**
     *  
     */
    public function score2 ($params, $currentBowler = false)
    {
        $params['currentBowler'] = $currentBowler;
        return $this->view->partial('partials/score2.phtml', $params);
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
