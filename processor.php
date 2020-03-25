<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_POST["username"]?></title>
</head>
<body>
    

<?php


//Variables declaration to store all the user informations
$firstname = filter_input(INPUT_POST, "firstname");
$lastname = filter_input(INPUT_POST, "lastname");
$username = filter_input(INPUT_POST, "username");
$email = filter_input(INPUT_POST, "email");
$department = filter_input(INPUT_POST, "department");
$gender = filter_input(INPUT_POST, "gender");
$msg = filter_input(INPUT_POST, "textarea");
$terms = filter_input(INPUT_POST, "terms");

//creation of file to hold user infomations
$name ="writable_file/" . $_POST["firstname"] . "_" . $_POST["lastname"];
$extension = ".txt";
$fp = fopen($name . $extension, "w");

//Writing of user information to the file created
fwrite($fp,"Here are the information you have submitted:\n");
fwrite($fp,"Last Name: " . $lastname."\n");
fwrite($fp,"User Name: " . $username."\n");
fwrite($fp,"Email: " . $email."\n");
fwrite($fp,"Department Selected: " . $department."\n");
fwrite($fp,"Gender: " . $gender."\n");
fwrite($fp,"Message in the textbox: " . $msg."\n");
fwrite($fp,"Terms and Conditions: " . $terms."\n");

//closing of the created file
fclose($fp);


//The user informations displayed when the submit button is clicked
print <<< HERE
    <h1>Thank you!!</h1>
    <h2>Here are the informations you have submitted:</h2>
    <h3>First-Name: $firstname</h3>
    <h3>Last-Name: $lastname</h3>
    <h3>User-Name: $username</h3>
    <h3>Email: $email</h3>
    <h3>Department selected: $department</h3>
    <h3>Gender: $gender</h3>
    <h3>Message in the textbox: $msg</h3>
    <h3>Terms and Conditions: $terms</h3>
HERE;
    
?>
</body>
</html>