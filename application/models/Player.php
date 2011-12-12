<?php
/**
 * 
 * 
 * @author zircote
 * @property string $_id      public
 * @property string $email    public
 * @property string $password public
 * @property string $role     public
 */
class Gaz_Model_Player extends Gaz_Model_ModelAbstract
{
    protected $_params = array('_id' => null, 'email' => null, 
    'password' => null, 'role' => null);
}