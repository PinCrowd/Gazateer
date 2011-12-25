<?php

class GameController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $json =<<<EOF
{
"frames" : {
    "1" : {
        "throw1" : "X"
    }
},
"total" : 0
}
EOF;
        $game = Zend_Json::decode($json);
        // action body
        $this->view->data = 
        array(
            array(
                'user' => array(
                    'username' => 'blasto',
                    'image' => '/images/brian-lastovich.jpg'
                ),
                'game' => $game
            ),
            array(
                'user' => array(
                    'username' => 'zircote',
                    'image' => '/images/bob-anderson.jpg'
                ),
                'game' => $game
            ),
            array(
                'user' => array(
                    'username' => 'gburg',
                    'image' => '/images/sarah-anderson.jpg'
                ),
                'game' => $game
            ),
            array(
                'user' => array(
                    'username' => 'elan',
                    'image' => '/images/adam-ludens.jpg'
                ),
                'game' => $game
            )
        );
        switch ($this->_getParam('page', '1')) {
            case '3':
                $this->render('three');
            break;
            case '2':
                $this->render('two');
            break;
            case '1':
            default:
                $this->render('index');
            break;
        }
    }
    public function scoreFrameAction()
    {
        $params = array('frame' => $this->_getParam('frame'));
        $this->view->data = $params;
        if($this->getRequest()->isPost()){
        }
    }

}

