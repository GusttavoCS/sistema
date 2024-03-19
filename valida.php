<?php
$usuarios_app=array(
    array('email'=>'gustavo@internet.com.br', 'password' => '123'),
);

$_usuario_autenticado=false;

foreach($usuarios_app as $user){#foreach percorre todo o vetor item por item
    #print_r($user);
    $user['email'];
    $user['password'];
    #comparando senha e login digitado
    if($user['email']==$_POST['email'] && $user['password']==$_POST['password']){
        $_usuario_autenticado=true;
    }
    
}

if($_usuario_autenticado){
    header('Location:curriculo.php');
}else{
    header('Location:index.phplogin=erro');#força
}
?>

<?php
#echo ($_POST['email']);
?>

<?php
#echo ($_POST['senha']);
?>