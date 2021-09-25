<?php
require_once('helper.php');
$note = $_POST['note'];
$query = "INSERT INTO notes(note) value ('$note')";
$sql = mysqli_query($db_connect,$query);

if($sql){
    echo json_encode(array('message'=>'Data sudah di tambahkan'));
    }else{
        echo json_encode(array('message'=>'error gan'));
    }
    

?>
