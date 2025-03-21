<?php 


class ValidationException extends Exception {
    public function __construct($message, $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   try {
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new ValidationException('Validation no');
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
    <form  method="post">
        <input placeholder="email" name="email">
    </form>
</body>
</html>
