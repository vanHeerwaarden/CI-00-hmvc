<h1>Systeem</h1>

<?php

echo anchor('tasks/create', '<p>toevoegen</p>');
echo"<hr/>";
foreach ($query->result() as $row) {
            
    $edit_url = base_url().'tasks/create/'.$row->id;
    echo "<h2>".$row->title." &nbsp; &nbsp; &nbsp; <a style='font-size: 0.5em' href='".$edit_url."'>edit</a></h2>";
}

echo "<hr>";
$firstname = "Jerry";
$lastname = "van Heerwaarden";
//manier 1 om een andere tabel op te roepen
$this->load->module('nofun');
$this->nofun->sayhello($firstname, $lastname);


echo "<hr>";
//manier 2
echo Modules::run('nofun/sayhello2', $firstname);


?>