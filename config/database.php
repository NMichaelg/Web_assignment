<?php
class Database {
    private $host = "localhost";
    private $db_name = "web_db";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";port=3306;dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
    public function get_cv_info_by_id($cv_id) {
        try {
            // Ensure a valid database connection
            if ($this->conn === null) {
                $this->getConnection();
            }

            // SQL query to fetch the CV data
            $query = "SELECT * FROM cv WHERE id = :cv_id";

            // Prepare the statement
            $stmt = $this->conn->prepare($query);

            // Bind the `cv_id` parameter
            $stmt->bindParam(':cv_id', $cv_id, PDO::PARAM_INT);

            // Execute the query
            $stmt->execute();

            // Fetch the result as an associative array
            $cv_info = $stmt->fetch(PDO::FETCH_ASSOC);

            // Return the CV information or null if not found
            return $cv_info ?: null;
        } catch (PDOException $e) {
            echo "Error fetching CV information: " . $e->getMessage();
            return null;
        }
    }
}
?>