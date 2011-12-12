<?php
class Pincrowd_User
{
    /**
     * 
     * 
     * @var string
     */
    protected $_id;
    /**
     * A bcrypt hash of the password.
     * 
     * @var string
     */
    protected $_password;
    /**
     * 
     * 
     * @var string
     */
    protected $_emailAddress;
    /**
     * 
     * 
     * @var MongoDate
     */
    protected $_birthDate;
}
