<?php
/**
 * 
 * 
 * @author zircote
 *
 */
class AuthController extends Zend_Controller_Action
{
    /**
     * @aclRoleAllow anonymous
     */
    public function permissionsAction()
    {
        echo 'perms'; exit;
    }
    /**
     * @aclRoleAllow anonymous
     */
    public function indexAction()
    {
        $form = new Gaz_Form_Login();
        $request = $this->getRequest();
        if ($request->isPost()) {
            if ($form->isValid($request->getPost())) {
                if ($this->_process($form->getValues())) {
                    // We're authenticated! Redirect to the home page
                    $this->_helper->redirector('index', 'index');
                }
            }
        }
        $this->view->form = $form;
    }
    /**
     * @aclResourceAllow anonymous
     */
    public function logoutAction()
    {
        Zend_Auth::getInstance()->clearIdentity();
        $this->_helper->redirector('index'); // back to login page
    }

    protected function _process($values)
    {
        // Get our authentication adapter and check credentials
        $adapter = $this->_getAuthAdapter($values);
        $auth = Zend_Auth::getInstance();
        $result = $auth->authenticate($adapter);
        if ($result->isValid()) {
            $user = $adapter->getIdentityResult();
            $auth->getStorage()->write($user);
            return true;
        }
        return false;
    }
    
    protected function _getAuthAdapter($formData) {
        $authAdapter = new Pincrowd_Auth_Adapter();
        $authAdapter->setIdentity($formData['username']); 
        $authAdapter->setCredential($formData['password']);
        return $authAdapter;
    }
}
