<?php 
class DatabaseConnectionException extends Exception {
    public function __construct($message, $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
function connectToDB(){
    $conn = new mysqli('pma.has.bмik','student','student');
    if ($conn -> connect_error) { 
       throw new DatabaseConnectionException('No Connect' . $conn -> connect_error);
    }
    return ('Connect');
}
try {
    print(connectToDB());
} catch (DatabaseConnectionException $e) {
    print($e ->getMessage());
}