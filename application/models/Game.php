<?php
/**
 * 
 * 
 * @author zircote
 * @property MongoId          $_id         protected
 * @property MongoDBRef       $player      protected
 * @property Gaz_Model_Frames $frames      public
 * @property integer          $total       protected
 * @property MongoDate        $dateStarted protected
 * @property MongoDate        $dateEnded   protected 
 */
class Gaz_Model_Game extends Gaz_Model_ModelAbstract
{
    protected $_params = array('_id' => null, 'player' => null, 
    'frames' => null, 'total' => null, 'dateStarted' => null, 
    'dateEnded' => null);
}