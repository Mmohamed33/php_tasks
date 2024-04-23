<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "medicsl-serv";

$conn = mysqli_connect($server,$username,$password,$db_name);

if(!$conn){
    die("error in connection : ". mysqli_connect_error());
}

function db_insert($sql){
    global $conn;
    $result = mysqli_query($conn,$sql);

    if($result){
        return "add scuess";
    }
    return "false";
}


function db_updata($sql){
    global $conn;
    $result = mysqli_query($conn,$sql);

    if($result){
        return "updata scuess";
    }
    return "false";
}
function getRows($table)
{
    global $conn;
    $sql = "SELECT * FROM `$table` ";
    $result=mysqli_query($conn,$sql);
    if($result){
        $rows=[];

        if(mysqli_num_rows($result)>0){
          while(  $row=mysqli_fetch_assoc($result)){
            $rows[]=$row;
          }
        }
        return $rows;
    }
    
}
function DeleteRow($sql)
{
    global $conn;
    $result = mysqli_query($conn,$sql);

    if($result){
        return "Deleted scuess";
    }
    return "false";
}

?>