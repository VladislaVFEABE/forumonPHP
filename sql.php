<?php
if(isset($_POST['reg'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])&& !empty($_POST['password_confirm'])&& !empty($_POST['date'])){
        $con = mysqli_connect('localhost', 'root', '','forum');
        $name = mysqli_escape_string($con, $_POST['name']);
        $email = mysqli_escape_string($con, $_POST['email']);
        $password = mysqli_escape_string($con, $_POST['password']);
        $password_confirm = mysqli_escape_string($con, $_POST['password_confirm']);
        $date = mysqli_escape_string($con, $_POST['date']);
        $query = mysqli_query($con, "SELECT * FROM `users` WHERE name='{$name}'");
        $numr = mysqli_num_rows($query);
        if($numr==0)
 {
 $sql_q="INSERT INTO `users`
 (name,email,password,password_confirm,data)
 VALUES('{$name}','{$email}', '{$password}', '{$password_confirm}','{$date}')";
 $res=mysqli_query($con,$sql_q);
 if($res){
 echo "Аккаунт успешно создан";
 }
 else {
 echo "Не удалось добавить информацию";
 }
 }
else {
 echo "Этот ник занятый. Попробуйте другой!";
 }
}else {
 //$info = "Все поля обязательны для заполнения!";
 echo "Все поля обязательны для заполнения!";
}
}
   