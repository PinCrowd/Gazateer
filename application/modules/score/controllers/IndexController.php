<?php

class Score_IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        
        
        
        // action body
        $map = new Pincrowd_Model_Mapper_Games();
        $game = $map->findById(new MongoId('4ef784876be132f45e000000'));
        $userMap = new Pincrowd_Model_Mapper_Players();
        $this->view->data = array(
            'bob' => array('user' => $userMap->findById('zircote') , 'game' => $game),
            'brian' => array('user' => $userMap->findById('blastovich') , 'game' => $game),
            'elan' => array('user' => $userMap->findById('emoss'), 'game' => $game),
            'greenberg' => array('user' => $userMap->findById('agreenberg') , 'game' => $game),
        );
        $this->view->renderScript = '/partials/score-card-1.phtml';
//         $this->view->renderScript = '/partials/score-card-1.phtml';
//         $this->view->renderScript = '/partials/score-card-1.phtml';
    }


}

