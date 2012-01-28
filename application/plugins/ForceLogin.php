<?php
/**
 *
 *
 * @author Robert Allen <rallen@ifbyphone.com>
 * @package
 * @subpackage
 *
 *
 */
class Gaz_Plugin_ForceLogin extends Zend_Controller_Plugin_Abstract
{
    protected $_allowedControllers = array('auth','error','registration');
    /**
     * (non-PHPdoc)
     *
     * @see Zend_Controller_Plugin_Abstract::dispatchLoopStartup()
     */
    public function dispatchLoopStartup (Zend_Controller_Request_Abstract $request)
    {
        $auth = Zend_Auth::getInstance();
        if (! $auth->hasIdentity()) {
            $controller = $request->getControllerName();
            if (!in_array($controller, $this->_allowedControllers)) {
                $redirector = Zend_Controller_Action_HelperBroker::getStaticHelper(
                'redirector');
                $redirector->gotoSimple('index', 'auth');
            }
        }
    }
}