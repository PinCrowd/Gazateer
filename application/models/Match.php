<?php 
/**
 * 
 * 
 * @author zircote
 * 
 * @property MongoId $_id public
 * @property array[MongoDBRef] $games public
 */
class Gaz_Model_Match extends Gaz_Model_ModelAbstract
{
    protected $_params = array(
        '_id' => null, 
        'games' => array()
    );
}