<?php
/* Core Classes */
class Mongo
{
    /**
     * 
     * 
     * @var string
     */
    const VERSION = '';
    /**
     * 
     * 
     * @var string
     */
    const DEFAULT_HOST = "localhost";
    /**
     * 
     * 
     * @var int
     */
    const DEFAULT_PORT = 27017;
    /**
     * 
     * 
     * @var boolean
     */
    public $connected = FALSE;
    /**
     * 
     * 
     * @var string
     */
    public $status = NULL;
    /**
     * 
     * 
     * @var string
     */
    protected $server = NULL;
    /**
     * 
     * 
     * @var boolean
     */
    protected $persistent = NULL;
    /**
     * 
     * <p>
     * This method does not need to be called, except in unusual circumstances. 
     * The driver will cleanly close the database connection when this Mongo 
     * instance goes out of scope.
     * <p>
     * If objects do not go out of scope between requests, you may wish to call 
     * this method at the end of your program to keep old connections from 
     * hanging around. However, it is probably more efficient use a persistent 
     * connection, which will automatically create a connection if needed and 
     * use it for as many requests as possible.
     * <p>
     * If you are connected to a replica set, close() will only close the 
     * connection to the primary.
     * 
     * @return boolean
     */
    public function close ()
    {}
    /**
     * @return boolean
     * @throws MongoConnectionException
     */
    public function connect ()
    {}
    /**
     * @return boolean
     * @throws MongoConnectionException
     */
    protected function connectUtil ()
    {}
    /**
     * <p>
     * If no parameters are passed, this connects to "localhost:27017" (or 
     * whatever was specified in php.ini for mongo.default_host and 
     * mongo.default_port).
     * 
     * <p>
     * <b>server should have the form:</b>
     * <b>mongodb://[username:password@]host1[:port1][,host2[:port2:],...]/db</b>
     * <p>
     * The connection string always starts with mongodb://, to indicate it is a 
     * connection string in this form.
     * <p>
     * If username and password are specified, the constructor will attempt to 
     * authenticate the connection with the database before returning. Username 
     * and password are optional and must be followed by an @, if specified.
     * <p>
     * At least one host must be given (port optional, always defaulting to 
     * 27017) and as many hosts as desired may be connected to. Host names are 
     * comma-separated and the constructor will return successfully if it 
     * connected to at least one host. If it could not connect to any of the 
     * hosts, it will throw a MongoConnectionException.
     * <p>
     * Finally, if you specified a username and password, you may specify a 
     * database to authenticate with. If db is not specified, "admin" will be 
     * used.
     * <p>
     * An array of options for the connection. Currently available options include:
     * - "connect"
     *     If the constructor should connect before returning. Default is TRUE.
     * -"timeout"
     *     For how long the driver should try to connect to the database (in 
     *     milliseconds).
     * -"replicaSet"
     *     The name of the replica set to connect to. If this is given, the 
     *     master will be determined by using the ismaster database command on 
     *     the seeds, so the driver may end up connecting to a server that was 
     *     not even listed. See the replica set example below for details.
     * -"username"
     *     The username can be specified here, instead of including it in the 
     *     host list. This is especially useful if a username has a ":" in it. 
     *     This overrides a username set in the host list.
     * -"password"
     *     The password can be specified here, instead of including it in the 
     *     host list. This is especially useful if a password has a "@" in it. 
     *     This overrides a password set in the host list.
     * -"db"
     *     The database to authenticate against can be specified here, instead 
     *     of including it in the host list. This overrides a database given in 
     *     the host list.
     * 
     * @param string $server
     * @param array $options
     */
    public function __construct ($server = "mongodb://localhost:27017", $options = array("connect" => TRUE))
    {}
    /**
     * @return array
     */
    public function dropDB ($db)
    {}
    /**
     * Gets a database
     * 
     * @return MongoDB
     */
    public function __get ($dbname)
    {}
    /**
     * <p>
     * Mongo::getHosts Ñ Updates status for all hosts associated with this
     * <p>
     * This method can only be used with a connection to a replica set. It 
     * returns the status of all of the hosts in the set.
     * 
     * @see http://us.php.net/manual/en/mongo.queries.php
     * @return array
     */
    public function getHosts ()
    {}
    /**
     * @return int
     */
    public static function getPoolSize ()
    {}
    /**
     * @return string
     */
    public function getSlave ()
    {}
    /**
     * @return boolean
     */
    public function getSlaveOkay ()
    {}
    /**
     * @return array
     */
    public function listDBs ()
    {}
    /**
     * @return array
     */
    public function poolDebug ()
    {}
    /**
     * @return MongoCollection
     */
    public function selectCollection ($db, $collection)
    {}
    /**
     * @return MongoDB
     */
    public function selectDB ($name)
    {}
    /**
     * @param int $size
     * @return bool
     */
    public static function setPoolSize ($size)
    {}
    /**
     * 
     * 
     * @param boolean $ok
     * @return boolean
     */
    public function setSlaveOkay ($ok = true)
    {}
    /**
     * @return string
     */
    public function switchSlave ()
    {}
    /**
     * @return string
     */
    public function __toString ()
    {}
}
class MongoDB
{
    /* Constants */
    /**
     * 
     * 
     * @var int
     */
    const PROFILING_OFF = 0;
    /**
     * 
     * 
     * @var int
     */
    const PROFILING_SLOW = 1;
    /**
     * 
     * 
     * @var int
     */
    const PROFILING_ON = 2;
    /* Fields */
    /**
     * 
     * 
     * @var integer
     */
    public $w = 1;
    /**
     * 
     * 
     * @var integer
     */
    public $wtimeout = 10000;
    /**
     * 
     * 
     * @param string $username
     * @param string $password
     */
    public function authenticate ($username, $password)
    {}
    /**
     * @param array $command
     */
    public function command (array $command)
    {}
    /**
     * @param Mongo $conn
     * @param string $name
     */
    function __construct (Mongo $conn, string $name)
    {}
    /**
     * @param string $name
     * @param boolean $capped
     * @param integer $size
     * @param integer $max
     * @return MongoCollection
     */
    public function createCollection (string $name, boolean $capped = FALSE, 
    int $size = 0, int $max = 0)
    {}
    /**
     * @param string $collection
     * @param mixed $a
     * @return array
     */
    public function createDBRef (string $collection, mixed $a)
    {}
    /**
     * @return array
     */
    public function drop ()
    {}
    /**
     * @param mixed $coll
     * @return array
     */
    public function dropCollection (mixed $coll)
    {}
    /**
     * @param mixed $code
     * @param array $args
     * @return array
     */
    public function execute (mixed $code, array $args = array())
    {}
    /**
     * @return boolean
     */
    public function forceError ()
    {}
    /**
     * @param string $name
     * @return MongoCollection
     */
    public function __get (string $name)
    {}
    /**
     * @param array $ref
     * @return array
     */
    public function getDBRef (array $ref)
    {}
    /**
     * @param string $prefix
     * @return MongoGridFS
     */
    public function getGridFS (string $prefix = "fs")
    {}
    /**
     * @return integer
     */
    public function getProfilingLevel ()
    {}
    /**
     * @return boolean
     */
    public function getSlaveOkay ()
    {}
    /**
     * @return array
     */
    public function lastError ()
    {}
    /**
     * @return array
     */
    public function listCollections ()
    {}
    /**
     * @return array
     */
    public function prevError ()
    {}
    /**
     * @param boolean $preserve_cloned_files
     * @param boolean $backup_original_files
     * @return array
     */
    public function repair (boolean $preserve_cloned_files = FALSE, 
    boolean $backup_original_files = FALSE)
    {}
    /**
     * @return array
     */
    public function resetError ()
    {}
    /**
     * @param string $name
     * @return MongoCollection
     */
    public function selectCollection (string $name)
    {}
    /**
     * @param integer $level
     * @return integer
     */
    public function setProfilingLevel (int $level)
    {}
    /**
     * @param boolean $ok
     * @return boolean
     */
    public function setSlaveOkay (boolean $ok = true)
    {}
    /**
     * @return string
     */
    public function __toString ()
    {}
}
class MongoCollection
{
    /**
     * 
     * 
     * @var integer
     */
    const ASCENDING = 1;
    /**
     * 
     * 
     * @var integer
     */
    const DESCENDING = - 1;
    /**
     * @var MongoDB
     */
    public $db = NULL;
    /**
     * 
     * 
     * @var integer
     */
    public $w;
    /**
     * 
     * 
     * @var integer
     */
    public $wtimeout;
    /**
     * 
     * 
     * @param array $a
     * @param array $options
     * @return mixed
     */
    public function batchInsert (array $a, array $options = array())
    {}
    /**
     * 
     * 
     * @param MongoDB $db
     * @param string $name
     * @return mixed
     */
    public function __construct (MongoDB $db, string $name)
    {}
    /**
     * 
     * 
     * @param array $query
     * @param integer $limit
     * @param integer $skip
     * @return integer
     */
    public function count (array $query = array(), int $limit = 0, int $skip = 0)
    {}
    /**
     * 
     * 
     * @param array $a
     * @return array
     */
    public function createDBRef (array $a)
    {}
    /**
     * 
     * 
     * @param string|array $keys
     * @return array
     */
    public function deleteIndex ($keys)
    {}
    /**
     * @return array
     */
    public function deleteIndexes ()
    {}
    /**
     * @return array
     */
    public function drop ()
    {}
    /**
     * 
     * 
     * @param array $keys
     * @param array $options
     * @return boolean
     */
    public function ensureIndex (array $keys, array $options = array())
    {}
    /**
     * 
     * 
     * @param array $query
     * @param array $fields
     * @return
     */
    public function find (array $query = array(), array $fields = array())
    {}
    /**
     * 
     * 
     * @param array $query
     * @param array $fields
     * @return array
     */
    public function findOne (array $query = array(), array $fields = array())
    {}
    /**
     * 
     * 
     * @param string $name
     * @return MongoCollection
     */
    public function __get (string $name)
    {}
    /**
     * 
     * 
     * @param array $ref
     * @return array
     */
    public function getDBRef (array $ref)
    {}
    /**
     * @return array
     */
    public function getIndexInfo ()
    {}
    /**
     * @return string 
     */
    public function getName ()
    {}
    /**
     * @return bool
     */
    public function getSlaveOkay ()
    {}
    /**
     * 
     * 
     * @param mixed $keys
     * @param array $initial
     * @param MongoCode $reduce
     * @param array $options
     * @return array
     */
    public function group (mixed $keys, array $initial, MongoCode $reduce, 
    array $options = array())
    {}
    /**
     * 
     * 
     * @param array $a
     * @param array $options
     * @return mixed
     */
    public function insert (array $a, array $options = array())
    {}
    /**
     * 
     * 
     * @param array $criteria
     * @param array $options
     * @return mixed
     */
    public function remove (array $criteria = array(), array $options = array())
    {}
    /**
     * 
     * 
     * @param array $a
     * @param array $options
     * @return mixed
     */
    public function save (array $a, array $options = array())
    {}
    /**
     * 
     * 
     * @param boolean $ok
     * @return bool
     */
    public function setSlaveOkay (boolean $ok = true)
    {}
    /**
     * @return string
     */
    public function __toString ()
    {}
    /**
     * 
     * 
     * @param array $criteria
     * @param array $newobj
     * @param array $options
     * @return bool
     */
    public function update (array $criteria, array $newobj, 
    array $options = array())
    {}
    /**
     * 
     * 
     * @param boolean $scan_data
     * @return array
     */
    public function validate (boolean $scan_data = FALSE)
    {}
}
class MongoCursor implements Iterator
{
    /**
     * 
     * 
     * @var boolean
     */
    static $slaveOkay = FALSE;
    /**
     * 
     * 
     * @var integer
     */
    static $timeout = 20000;
    /**
     * 
     * 
     * @param string $key
     * @param mixed $value
     * @return MongoCursor
     */
    public function addOption (string $key, mixed $value)
    {}
    /**
     * 
     * 
     * @param integer $num
     * @return MongoCursor
     */
    public function batchSize (int $num)
    {}
    public function __construct (Mongo $connection, string $ns, 
    array $query = array(), array $fields = array())
    {}
    /**
     * 
     * 
     * @param boolean $foundOnly
     * @return integer
     */
    public function count (boolean $foundOnly = FALSE)
    {}
    /**
     * (non-PHPdoc)
     * @see Iterator::current()
     */
    public function current ()
    {}
    /**
     * @return boolean
     */
    public function dead ()
    {}
    /**
     * @return void
     */
    protected function doQuery ()
    {}
    /**
     * @return array
     */
    public function explain ()
    {}
    public function fields (array $f)
    {}
    /**
     * @return array
     */
    public function getNext ()
    {}
    /**
     * @return boolean
     */
    public function hasNext ()
    {}
    /**
     * 
     * 
     * @param array$key_pattern
     * @return MongoCursor
     */
    public function hint (array $key_pattern)
    {}
    /**
     * 
     * 
     * @param boolean $liveForever
     * @return MongoCursor
     */
    public function immortal (boolean $liveForever = true)
    {}
    /**
     * @return array
     */
    public function info ()
    {}
    /**
     * (non-PHPdoc)
     * @see Iterator::key()
     */
    public function key ()
    {}
    /**
     * 
     * 
     * @param int $num
     * @return MongoCursor
     */
    public function limit (int $num)
    {}
    /**
     * (non-PHPdoc)
     * @see Iterator::next()
     */
    public function next ()
    {}
    /**
     * 
     * 
     * @param boolean $okay
     * @return MongoCursor
     */
    public function partial (boolean $okay = true)
    {}
    /**
     * @return void
     */
    public function reset ()
    {}
    /**
     * @return void
     */
    public function rewind ()
    {}
    /**
     * 
     * 
     * @param integer $num
     * @return MongoCursor
     */
    public function skip (int $num)
    {}
    /**
     * 
     * 
     * @param boolean $okay
     * @return MongoCursor
     */
    public function slaveOkay (boolean $okay = true)
    {}
    /**
     * 
     * @return MongoCursor
     */
    public function snapshot ()
    {}
    /**
     * 
     * 
     * @param array $fields
     * @return MongoCursor
     */
    public function sort (array $fields)
    {}
    /**
     * 
     * 
     * @param boolean $tail
     * @return MongoCursor
     */
    public function tailable (boolean $tail = true)
    {}
    /**
     * 
     * 
     * @param integer $ms
     * @return MongoCursor
     */
    public function timeout (int $ms)
    {}
    /**
     * (non-PHPdoc)
     * @see Iterator::valid()
     */
    public function valid ()
    {}
}
/* MongoTypes */
class MongoId
{
    /**
     * 
     * 
     * @var string
     */
    public $id = NULL;
    /**
     * 
     * 
     * @param string $id
     */
    public function __construct (string $id = NULL)
    {}
    /**
     * @return string
     */
    public static function getHostname ()
    {}
    /**
     * @return integer
     */
    public function getInc ()
    {}
    /**
     * @return integer
     */
    public function getPID ()
    {}
    /**
     * @return integer
     */
    public function getTimestamp ()
    {}
    /**
     * 
     * 
     * @param array $props
     * @return MongoId
     */
    public static function __set_state (array $props)
    {}
    /**
     * @return string
     */
    public function __toString ()
    {}
}
class MongoCode
{
    /**
     * 
     * 
     * @param string $code
     * @param array $scope
     */
    public function __construct (string $code, array $scope = array())
    {}
    /**
     * @return string
     */
    public function __toString ()
    {}
}
class MongoDate
{
    /**
     * 
     * 
     * @var integer
     */
    public $sec;
    /**
     * 
     * 
     * @var integer
     */
    public $usec;
    public function __construct (int $sec = '', int $usec = 0)
    {}
    /**
     * @return string
     */
    public function __toString ()
    {}
}
class MongoRegex
{
    /**
     * 
     * 
     * @var string
     */
    public $regex;
    /**
     * 
     * 
     * @var string
     */
    public $flags;
    /**
     * 
     * 
     * @param string $regex
     */
    public function __construct (string $regex)
    {}
    /**
     * @return string
     */
    public function __toString ()
    {}
}
class MongoBinData
{
    /**
     * 
     * 
     * @var integer
     */
    const FUNC = 1;
    /**
     * 
     * 
     * @var integer
     */
    const BYTE_ARRAY = 2;
    /**
     * 
     * 
     * @var integer
     */
    const UUID = 3;
    /**
     * 
     * 
     * @var integer
     */
    const MD5 = 5;
    /**
     * 
     * 
     * @var integer
     */
    const CUSTOM = 128;
    /**
     * 
     * 
     * @var string
     */
    public $bin;
    /**
     * 
     * 
     * @var integer
     */
    public $type = 2;
    /**
     * 
     * 
     * @param string $data
     * @param int $type
     */
    public function __construct (string $data, int $type = 2)
    {}
    /**
     * @return string
     */
    public function __toString ()
    {}
}
class MongoInt32
{
    /**
     * 
     * 
     * @var string
     */
    public $value;
    /**
     * 
     * 
     * @param string $value
     */
    public function __construct (string $value)
    {}
    /**
     * @return string
     */
    public function __toString ()
    {}
}
class MongoInt64
{
    /**
     * 
     * 
     * @var string
     */
    public $value;
    /**
     * 
     * 
     * @param string $value
     */
    public function __construct (string $value)
    {}
    /**
     * @return string
     */
    public function __toString ()
    {}
}
class MongoDbRef
{
    /**
     * 
     * 
     * @param string $collection
     * @param mixed $id
     * @param string $database
     * @return array
     */
    public static function create (string $collection, mixed $id, 
    string $database)
    {}
    /**
     * 
     * 
     * @param MongoDB $db
     * @param array $ref
     * @return array
     */
    public static function get (MongoDB $db, array $ref)
    {}
    /**
     * 
     * 
     * @param mixed $ref
     * @return boolean
     */
    public static function isRef (mixed $ref)
    {}
}
class MongoMinKey
{
}
class MongoMaxKey
{
}
class MongoTimeStamp
{
    public $sec = 0;
    public $inc = 0;
    /**
     * 
     * 
     * @param int $sec
     * @param int $inc
     */
    public function __construct (int $sec = '', int $inc)
    {}
    /**
     * @return string
     */
    public function __toString ()
    {}
}
/* GridFS */
class MongoGridFS
{
    /**
     * 
     * 
     * @var MongoCollection
     */
    public $chunks = NULL;
    /**
     * 
     * 
     * @var string
     */
    protected $filesName = NULL;
    /**
     * 
     * 
     * @var string
     */
    protected $chunksName = NULL;
    /**
     * 
     * 
     * @param MongoDB $db
     * @param string $prefix
     * @param mixed $chunks
     */
    public function __construct (MongoDB $db, string $prefix = "fs", 
    mixed $chunks = "fs")
    {}
    /**
     * 
     * 
     * @param mixed $id
     * @return boolean
     */
    public function delete (mixed $id)
    {}
    /**
     * @return array
     */
    public function drop ()
    {}
    /**
     * 
     * 
     * @param array $query
     * @param array $fields
     * @return MongoGridFSCursor
     */
    public function find (array $query = array(), array $fields = array())
    {}
    /**
     * 
     * 
     * @param mixed $query
     * @param mixed $fields
     * @return MongoGridFSFile
     */
    public function findOne (mixed $query = array(), mixed $fields = array())
    {}
    /**
     * 
     * 
     * @param mixed $id
     * @return MongoGridFSFile
     */
    public function get (mixed $id)
    {}
    /**
     * 
     * 
     * @param string $filename
     * @param array $extra
     * @return mixed
     */
    public function put (string $filename, array $extra = array())
    {}
    /**
     * 
     * 
     * @param array $criteria
     * @param array $options
     * @return bool
     */
    public function remove (array $criteria = array(), array $options = array())
    {}
    /**
     * 
     * 
     * @param string $bytes
     * @param array $extra
     * @param array $options
     * @return mixed
     */
    public function storeBytes (string $bytes, array $extra = array(), 
    array $options = array())
    {}
    /**
     * 
     * 
     * @param string $filename
     * @param array $extra
     * @param array $options
     * @return mixed
     */
    public function storeFile (string $filename, array $extra = array(), 
    array $options = array())
    {}
    /**
     * 
     * 
     * @param string $name
     * @param array $metadata
     * @return mixed
     */
    public function storeUpload (string $name, array $metadata)
    {}
}
class MongoGridFSFile
{
    /**
     * 
     * 
     * @var array
     */
    public $file = NULL;
    /**
     * 
     * 
     * @var MongoGridFS
     */
    protected $gridfs = NULL;
    /**
     * 
     * 
     * @param MongoGridFS $gridfs
     * @param array $file
     */
    public function __construct (MongoGridFS $gridfs, array $file)
    {}
    /**
     * @return string
     */
    public function getBytes ()
    {}
    /**
     * @return string
     */
    public function getFilename ()
    {}
    /**
     * @return integer
     */
    public function getSize ()
    {}
    /**
     * 
     * @param string $filename
     * @return integer
     */
    public function write (string $filename = NULL)
    {}
}
class MongoGridFSCursor
{
    /**
     * 
     * 
     * @var MongoGridFS
     */
    protected $gridfs = NULL;
    /**
     * 
     * 
     * @param MongoGridFS $gridfs
     * @param resource $connection
     * @param string $ns
     * @param array $query
     * @param array $fields
     */
    function __construct (MongoGridFS $gridfs, resource $connection, string $ns, 
    array $query, array $fields)
    {}
    /**
     * @return MongoGridFSFile
     */
    public function current ()
    {}
    /**
     * @return MongoGridFSFile
     */
    public function getNext ()
    {}
    /**
     * @return string
     */
    public function key ()
    {}
}
/* Misc */
class MongoLog
{
    /**
     * 
     * 
     * @var integer
     */
    const NONE = 0;
    /**
     * 
     * 
     * @var integer
     */
    const ALL = 15;
    /**
     * 
     * 
     * @var integer
     */
    const WARNING = 1;
    /**
     * 
     * 
     * @var integer
     */
    const INFO = 2;
    /**
     * 
     * 
     * @var integer
     */
    const FINE = 4;
    /**
     * 
     * 
     * @var integer
     */
    const RS = 1;
    /**
     * 
     * 
     * @var integer
     */
    const POOL = 2;
    /**
     * 
     * 
     * @var integer
     */
    const IO = 4;
    /**
     * 
     * 
     * @var integer
     */
    public $level;
    /**
     * 
     * 
     * @var integer
     */
    public $module;
    /**
     * 
     * 
     * @param int $sec
     * @param int $usec
     */
    public function __construct (int $sec, int $usec = 0)
    {}
    /**
     * @return string
     */
    public function __toString ()
    {}
}
class MongoPool
{
    /**
     * @return integer
     */
    public static function getSize ()
    {}
    /**
     * @return array
     */
    public function info ()
    {}
    /**
     * 
     * 
     * @param int $size
     * @return boolean
     */
    public static function setSize (int $size)
    {}
}
/* Exceptions */
class MongoException extends Exception
{
}
class MongoCursorException extends MongoException
{
}
class MongoCursorTimeoutException extends MongoCursorException
{
}
class MongoConnectionException extends MongoException
{
}
class MongoGridFSException extends MongoException
{
}