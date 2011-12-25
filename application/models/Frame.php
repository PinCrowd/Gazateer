<?php
/**
 * 
 * 
 * @author zircote
 * @property integer         $score  public
 * @property Gaz_Model_Throw $throw1 public
 * @property Gaz_Model_Throw $throw2 public
 * @property Gaz_Model_Throw $throw3 public
 * @property integer         $total  public
 */
class Gaz_Model_Frame extends Gaz_Model_ModelAbstract
{
    /**
     * 
     * 
     * @var array
     */
    protected $_params = array('score' => null, 'throw1' => null, 
    'throw2' => null, 'throw3' => null, 'total' => null);
    /**
     * (non-PHPdoc)
     * @see Gaz_Model_ModelAbstract::toArray()
     */
    public function toArray()
    {
        $data = parent::toArray();
        if($data['throw1'] instanceof Gaz_Model_Throw){
            $data['throw1']->toArray();
        }
        if($data['throw2'] instanceof Gaz_Model_Throw){
            $data['throw2']->toArray();
        } else {
            unset($data['throw2']);
        }
        if($data['throw3'] instanceof Gaz_Model_Throw){
            $data['throw3']->toArray();
        } else {
            unset($data['throw3']);
        }
        return $data;
    }
}