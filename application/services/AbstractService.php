<?php
/**
 * @todo ewww this might stink in a week or at least smell funny
 *
 * @author Robert Allen <rallen@ifbyphone.com>
 * @package
 * @subpackage
 *
 *
 */
abstract class Gaz_Service_AbstractService
{
    /**
     *
     * @var Zend_Log
     */
    protected static $_log;
    /**
     *
     * @var Zend_Cache_Core
     */
    protected static $_cache;

    /**
     *
     * @var array
     */
    protected static $_config;
    /**
     *
     * @var Zend_Db_Adapter_Abstract
     */
    protected static $_db;
    /**
     *
     * @param Zend_Db_Adapter_Abstract $db
     */
    public static function setDb(Zend_Db_Adapter_Abstract $db)
    {
        self::$_db = $db;
    }
    /**
     *
     * @return Zend_Db_Adapter_Abstract
     */
    public static function getDb()
    {
        if(!self::$_db instanceof Zend_Db_Adapter_Abstract){
            $e = new RuntimeException('Database Adapter is not Assigned');
            self::getLog()->log($e, Zend_Log::CRIT);
        }
        return self::$_db;
    }
    /**
     *
     * @param Zend_Log $log
     */
    public static function setLog(Zend_Log $log)
    {
        self::$_log = $log;
    }
    /**
     *
     * @return Zend_Log
     */
    public static function getLog()
    {
        if(!self::$_log instanceof Zend_Log){
            $log = new Zend_Log();
            $log->addWriter(new Zend_Log_Writer_Null);
            self::setLog($log);
        }
        return self::$_log;
    }
    /**
     *
     * @param array|Zend_Config $config
     */
    public static function setConfig($config)
    {
        if($config instanceof Zend_Config){
            $config = $config->toArray();
        }
        self::$_config = $config;
    }
    /**
     * @return array
     */
    public static function getConfig()
    {
        return self::$_config;
    }
    /**
     *
     * @param Zend_Cache_Core $cache
     * @return void
     */
    public static function setCache(Zend_Cache_Core $cache)
    {
        self::$_cache = $cache;
    }
    /**
     * @return Zend_Cache_Core
     */
    public static function getCache()
    {
        if(!self::$_cache instanceof Zend_Cache_Core){
            self::$_cache = Zend_Cache::factory('Core', 'BlackHole',
                    array('automatic_serialization' => true));
        }
        return self::$_cache;
    }
}