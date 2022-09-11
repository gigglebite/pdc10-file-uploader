<?php

include "form-handler.php";

$dsn = "mysql:host=localhost;dbname=pdc10_db";
$user = "admin2";
$passwd = "root";

$pdo = new PDO($dsn, $user, $passwd);

$result = Registration::handleUpload($_FILES['picture_path']);

if ($result !== FALSE && $_POST["password"] === $_POST["confirm_password"]) {
	$pass = Registration::encPass($_POST['password']);
	$obj = new Registration($_POST['complete_name'],$_POST['email'],$pass['password'],$result['path']);
	$result = $obj->save();
  $message = true;

} else {
  $message = false;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>
  <body>
  <div class="container">
<?php
if ($message == true){
  echo "<div class=". "'alert alert-success'" . ">
  Successfully processed your registration.
</div>";
} else if ($message != true) {
  echo "<div class=". "'alert alert-danger'" . ">
  Unable to process your registration.
</div>";
}
?>
<div class="row">
<div class="col">
    <h2>Registrations</h2>
</div>
<div class="col">
<a href="register.php"><button class="btn btn-primary">Add New Registrations</button></a>
</div>

    <table class="table table-hover">

        <thead>

            <tr>

                <th>ID</th>
                <th>Complete Name</th>
                <th>Email</th>
                <th>Picture</th>
                <th>Registered Date</th>

            </tr>

        </thead>


        <tbody>

            <?php
                $registrations = Registration::retrieveRegistration();
                foreach($registrations as $registration)

                {

            ?>

            <tr>
                <td>
                    <?php echo $registration['id']; ?>
                </td>

                <td>
                    <?php echo $registration['complete_name']; ?>
                </td>
                <td>
                    <?php echo $registration['email']; ?>
                </td>
                <td>
                    <?php 
                    $filename= $registration['picture_path'];
                    
                    echo "<img width=100px; height=100; src=" .  $registration['picture_path'] . ">"; ?>
                </td>
                <td>
                    <?php echo $registration['registered_at']; ?>
                </td>

                <?php

}

?>

  </body>
</html>