<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
     $email = $_POST['email'];
     $password = $_POST['password'];
     if (empty($email) || empty($password)) {
        throw new Exception('Поле обязательное для заполнение');
     }
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         throw new Exception('Формат эмайла');
     }
     if (strlen($password) < 5) {
        throw new Exception('Короткий пароль');
     }
    } catch (ValidationException $e) {
     print $e->getMessage();
     }
 } 
 
 
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <form  method="post" >
         <input placeholder="email" name="email"> <br>
         <input type="password" name="password"  placeholder="password">
     
     </form>
 </body>
 </html>