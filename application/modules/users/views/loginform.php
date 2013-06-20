<h1>Login</h1>

<?php
    echo validation_errors("<p style = 'color: red;'>","</p>");
?>

<p>Please fill in your details and hit 'Submit'</p>
<?php

echo form_open('users/submit');

echo "Gebruikersnaam";
echo form_password('username','');
echo "<br>";

echo "Wachtwoord";
echo form_password('password','');
echo "<br>";
 
echo form_submit('submit','Ga');
echo form_close();
?>
