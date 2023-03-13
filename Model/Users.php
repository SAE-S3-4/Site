<?php
final class Users extends Model{

    public static function connect(array $A_getParams):string{
        $S_id = $A_getParams['id'];
        $A_user = self::selectById($S_id);
        $S_password = hash('sha512', $A_getParams['password'].$A_getParams['id']);
        if(self::checkIfExistsById($S_id) && $A_user['password']== $S_password){
            if(Admins::checkIfExistsById($S_id)){
                return "admin";
            }
            return "user";
        }
        return "Mot de passe ou Pseudo invalide";
    }

    public static function isUser(array $A_getParams):string{
        $S_id = $A_getParams['id'];
        $A_user = self::selectById($S_id);
        $S_password = hash('sha512', $A_getParams['password'].$A_getParams['id']);
        if ($A_user && $A_user['password']== $S_password) {
            if(Admins::selectById($S_id)) {
                return 'admin';
            }
            return 'user';
        }
        return 'visitor';
    }

    public static function checkIfExistsByEmail(string $S_email):bool{
        $A_user = self::selectByEmail($S_email);
        return isset($A_user['id']);
    }

    public static function selectByEmail(string $S_email){
        $O_con = Connection::initConnection();
        $S_stmnt = "SELECT * FROM Users WHERE email = :email ";
        $O_sth = $O_con->prepare($S_stmnt);
        $O_sth -> bindValue(":email", $S_email, PDO::PARAM_STR);
        $O_sth->execute();
        return ($O_sth-> fetch());
    }
}