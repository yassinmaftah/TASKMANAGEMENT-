<?php
// declare(strict_types=1);
// namespace App\Core;
// use PDO;
// use PDOException;
// use Exception;

class Database
{
    private static $host = "localhost";
    private static $user = "root";
    private static $password = "sqlyassine2025";
    private static $dbname = "TaskManagemrnt";
    private static $conn = null;

    public static function GetConnect ()
    {
        try
        {
            if (!self::$conn)
            {
                self::$conn = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname , self::$user, self::$password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            }
            return self::$conn;
        }
        catch (PDOException $e)
        {
            throw new Exception("Database Not Connected " . $e->getMessage());
        }
    }

}