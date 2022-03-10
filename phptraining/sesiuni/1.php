<?php
session_start();
//unset($_SESSION['user']);
var_dump($_SESSION);
$user = isset($_SESSION['user']) ? $_SESSION['user']:null;
if(isset($_GET['logout'])) {
    echo "Logout";
    unset($_SESSION['user']);
}

$utilizatori = [
    ['user'=>'mihaela', 'password'=>'123'],
    ['user'=>'mircea', 'password'=>'321']
];

$request = isset($_POST)?$_POST:null;


if($request){
    foreach($utilizatori as $u){
        if(($u['user'] === $request['username']) 
            && ($u['password'] === $request['password'])) {
            $_SESSION['user']  = $u;
            return;
        }
    }
    echo "Pleaca de aici hackare";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php if($user == null):?>
    
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Login">
    </form>

    <?php else:?>
    
        <h1>Bine ai venit <?=$user['user']?></h1>
        <a href="?logout=ture">Logout</a>
        <form action="" method="get">
            <input type="hidden" name="logout" id="logout">
            <button type="submit">Logout</button>
        </form>

    <?php endif;?>    
</body>
</html>

