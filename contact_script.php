<?php
require 'common.php';
$name=mysqli_real_escape_string($con,$_POST['name']);
$len = strlen($name);
$email=mysqli_real_escape_string($con,$_POST['email']);
$subject=mysqli_real_escape_string($con,$_POST['subject']);
$message=mysqli_real_escape_string($con,$_POST['message']);
$dt=date('y-m-d h:i:s');
if (($len)< 3 ){
echo "<script> alert('enter full name');
window.location='contact.php';
</script>";
}
else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
echo "<script> alert('invalid email format');
window.location='contact.php';
</script>";
}
else{
$insert="insert into contact(name,email,subject,message,date) values('$name','$email','$subject','$message','$dt')";
$insert_query=mysqli_query($con,$insert);
if($insert_query){
echo "<script> alert('Message sent');
window.location='contact.php';
</script>";
}

}
?>