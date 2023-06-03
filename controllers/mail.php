<?
$name    = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$phone   = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
$email   = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

$to      = "nik2004itamalcev@gmail.com";
$subject = "Заявка с сайта Level-Agency";
$message = $name . "\n" . $phone . "\n" . $email . "\n" . $message;
$headers = array(
    'From' => "nik2004itamalcev@gmail.com",
    'Reply-To' => "nik2004itamalcev@gmail.com",
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);
header('Location: /'); 
?>