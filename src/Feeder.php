<?php
namespace FeederPackage;

class Feeder
{
    /**
     * Username Admin Feeder
     * @var mixed
     */
    public $username;

    /**
     * Password Admin Feeder
     * @var mixed
     */
    public $password;

    /**
     * @param string $username
     * @param string $password
     */
    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public static function get_user()
    {
        return self::$username;
    }
}
