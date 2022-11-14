<?php



class DB
{
    private $connection;

    /**
     * @param string $host
     * @param $database
     * @param  $username
     * @param string $password
     */
    public function __construct(string $host, string $database, string $username = "root", string $password = "")
    {
        $this->connection = new mysqli($host, $username, $password, $database);
    }

    /**
     * @return mysqli
     */
    public static function connect()
    {
        $db = new DB("localhost", "magomedova39_03_uchPr", "root", "");
        return $db->connection;
    }
}



