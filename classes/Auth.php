<?php
class Auth {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
        session_start();
    }

    public function login($username, $password) {
        $query = "SELECT * FROM users WHERE username = :username LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Login pakai password_verify jika sudah di-hash
            if ($password === $user['password']) {
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'level' => $user['level']
                ];
                return true;
            }
        }

        return false;
    }

    public function isLoggedIn() {
        return isset($_SESSION['user']);
    }

    public function getLevel() {
        return $_SESSION['user']['level'] ?? null;
    }

    public function logout() {
        session_destroy();
        unset($_SESSION['user']);
    }
}
?>
