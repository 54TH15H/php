<?php
if(isset($_POST['submit'])){
    $mobile = '917036543630';
    $message = $_POST['message'];
    $apiKey = urlencode('NzM0MjU0Mzg0YjU3NDk1NTc4NDM0NzdhNTg3ODUxNDY=');
    $numbers = array($mobile);
    $sender = urlencode('LIBRARY');
    $message = rawurlencode('This is your message');
    
    $numbers = implode(',', $numbers);
    
    $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
    $ch = curl_init('https://api.textlocal.in/send/');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    echo $response;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SMS</h1><br>
    <form method="post">
        Mobile : <input type="text" name="mobile" autocomplete="off"><br><br>
        Message : <input type="text" name="message" id="" autocomplete="off"><br><br>
        <input type="submit" value="submit" name="submit">

    </form>

</body>
</html>