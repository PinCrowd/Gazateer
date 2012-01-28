<?php 
/**
 * 
 * 
 * @author zircote
 *
 */
class Gaz_Model_Mapper_Players extends Pincrowd_MongoAbstract
{
    /**
     * @todo not decided I like the whole pass by reference game yet or not.
     * I find it generally a hack and unintuitive to say the least adding a level
     * of obsfucation I rather avoid for maintainability.
     * 
     * @param Gaz_Model_Player $player
     */
    public function getUser(Gaz_Model_Player &$player)
    {
        $result = self::getMongoDB()
            ->users->findOne(array('_id' => $player->_id));
        $player->fromArray($result);
    }
}