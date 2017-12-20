<?php
class User {
    public $firstName;
    public $lastName;
    public $age;
    public $hometown;
    public $job;
}

$q = intval($_GET['q']);
$response_data = array();

$con = mysqli_connect('devops.enun.com','root','','wp_app');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"wp_crud");

if($q != 'all'){
    $sql="SELECT * FROM _user WHERE id = '".$q."'";
}else{
    $sql="SELECT * FROM _user";
}

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    $user_data = new User();
    $user_data->firstName = $row['FirstName'];
    $user_data->lastName = $row['LastName'];
    $user_data->age = $row['Age'];
    $user_data->hometown = $row['Hometown'];
    $user_data->job = $row['Job'];
    
    array_push($response_data, $user_data);
}

echo json_encode($response_data);

mysqli_close($con);


?>