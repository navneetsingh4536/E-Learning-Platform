<?php
$con= mysqli_connect("localhost","root","","lms");
$q1= "Create table contact(Name varchar(20), Email varchar(45), Phone varchar(15), Subject varchar(40), Problem varchar(55))";
if(mysqli_query($con,$q1))
{
    echo "table created";
}
else
{
    echo "not created";
}
mysqli_close($con);
?>