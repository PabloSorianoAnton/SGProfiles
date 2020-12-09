<?php 
    require_once 'user.php';

    class UserDAO {
        private $pdo;

        public function __construct()
        {
            require_once 'connection.php';
            $this->pdo=$pdo;
        }

        public function login($user){
            $query = "SELECT * FROM users WHERE email=? AND passwd=?";
            $sentencia = $this->pdo->prepare($query);
            $email = $user->getEmail();
            $passwd = $user->getPasswd();
            $sentencia->bindParam(1,$email);
            $sentencia->bindParam(2,$passwd);
            $sentencia->execute();
            $result = $sentencia->fetch(PDO::FETCH_ASSOC);
            $numRow = $sentencia->rowCount();
            // print_r($numRow);
            // echo $passwd;

            if (!empty($numRow) && $numRow==1) {
                $user->setId($result['id']);
                $user->setNombre($result['name']);
                $user->setProfile($result['profile']);
                $user->setStatus($result['status']);
                session_start();
                $_SESSION['email']=$user;
                return true;
            }else {
                return false;
            }
        }

        public function registro(){
            $nombre = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $passwd = md5($_POST['passwd']);
            $query = "INSERT INTO users (`name`,surname,email,passwd,`status`,`profile`) VALUES(?,?,?,?,1,1)";
            $sentencia = $this->pdo->prepare($query);
            $sentencia->bindParam(1,$nombre);
            $sentencia->bindParam(2,$surname);
            $sentencia->bindParam(3,$email);
            $sentencia->bindParam(4,$passwd);
            $sentencia->execute();

            header('Location: registroComplete.php');
        }

        public function posts(){
            $query = "SELECT * FROM posts";
            $sentencia = $this->pdo->prepare($query);
            $sentencia->execute();
            $post = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $post;
        }

        public function validarEmail(){
            $email = $_POST['email'];
            $query = "SELECT * FROM users WHERE email=?";
            $sentencia = $this->pdo->prepare($query);
            $sentencia->bindParam(1, $email);
            $sentencia->execute();
            $result = $sentencia->fetch(PDO::FETCH_ASSOC);
            $numRow = $sentencia->rowCount();
            // echo $numRow;
            
            if ($numRow >= 1) {
                echo '<p style="color:red;">Este correo ya existe';
            }else {
                // echo 'Correo no existe';
                $this->registro();
            }
        }

        public function usuarios(){
            $query = "SELECT id,`name`,surname,email,`status`,`profile` FROM users ";
            $sentencia = $this->pdo->prepare($query);
            $sentencia->execute();
            $result = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function bloquear($id){
            $query = "UPDATE users SET `status`=0 WHERE id=$id";
            $sentencia = $this->pdo->prepare($query);
            $sentencia->execute();
            header("Location: ../view/usuarios.php");
        }
        public function desbloquear($id){
            $query = "UPDATE users SET `status`=1 WHERE id=$id";
            $sentencia = $this->pdo->prepare($query);
            $sentencia->execute();
            header("Location: ../view/usuarios.php");
        }
    }
?>