<?php

class SystemDatabase
{
    private $dbhost;
    private $dbuser;
    private $dbpass;
    private $dbname;
    private $dbport;
    private $connect = null;
    private $error;
    private $stmt;

    public function __construct()
    {
        // Initialize database credentials from constants
        $this->dbhost = DB_HOST;
        $this->dbuser = DB_USER;
        $this->dbpass = DB_PASS;
        $this->dbname = DB_NAME;
        $this->dbport = DB_PORT; // Add DB_PORT

        // Set DSN and options
        $dsn = "mysql:host={$this->dbhost};port={$this->dbport};dbname={$this->dbname};charset=utf8";
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];

        // Establish database connection
        try {
            $this->connect = new PDO($dsn, $this->dbuser, $this->dbpass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            die("Database connection failed: {$this->error}");
        }
    }

    // Get connection error
    public function getError(): ?string
    {
        return $this->error;
    }

    // Check connection status
    public function isConnected(): bool
    {
        return $this->connect !== null;
    }

    // Prepare SQL query
    public function dbquery(string $query): void
    {
        if (!$this->isConnected()) {
            die("Database not connected. Unable to prepare query.");
        }
        $this->stmt = $this->connect->prepare($query);
    }

    // Bind parameters to the prepared statement
    public function dbbind($param, $value, $type = null): void
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    // Execute the prepared statement
    public function dbexecute(): bool
    {
        return $this->stmt->execute();
    }

    // Fetch all results as objects
    public function getmultidataobj(): array
    {
        $this->dbexecute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Fetch all results as associative arrays
    public function getmultidataassoc(): array
    {
        $this->dbexecute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Fetch a single result as an object
    public function getsingledataobj()
    {
        $this->dbexecute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    // Fetch a single result as an associative array
    public function getsingledataassoc()
    {
        $this->dbexecute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Get row count from the last executed statement
    public function dbrowcount(): int
    {
        return $this->stmt->rowCount();
    }
}

// Test the connection (remove or comment this in production)
$db = new SystemDatabase();
if ($db->isConnected()) {
    // echo "Database connected successfully.";
} else {
    echo "Failed to connect to the database.";
}

?>
