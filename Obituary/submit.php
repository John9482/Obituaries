<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $date_of_birth=$_POST['date_of_birth'];
    $date_of_death=$_POST['date_of_death'];
    $content=$_POST['content'];
    $author=$_POST['author'];
    

$con=new mysqli('localhost','root','','obituary_platform')
;
if($con){
    //echo "Connection successful";
    $sql="insert into `obituaries` (name,date_of_birth,date_of_death,content,author)
    values('$name','$date_of_birth','$date_of_death','$content','$author')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data inserted  successfully!!!!!";
    }else{
        die(mysqli_error($con));  

    }
}else{
    die(mysqli_error($con));
}

}

?>
