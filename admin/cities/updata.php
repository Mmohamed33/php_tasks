<?php require '../../config.php';  ?>

<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';?>


<?php
if(isset($_POST['sumbit']))
{
    $name=$_POST['name'];
    $city_id=$_POST['city_id'];
    if(checkEmpty($name)&&checkLess($name,3))
    {
        $row = getRows('city_id',$city_id,'cities');
        if(!$row)
        { 
            $sql = "UPDATE cities set `citiy_name`='$name' WHERE `city_id`='$city_id' ";
            $success_message = db_updata($sql);
            header("refres:2;url=".BURLA."cities");
        
        }
        else
        { 
        $error_message = "please type correct data";   
        }
    }
    else
    {
        $error_message = "please fill all filhds";
    }


    require BL.'function/message.php';
}

?>





<?php require BLA.'inc/footer.php';  ?>