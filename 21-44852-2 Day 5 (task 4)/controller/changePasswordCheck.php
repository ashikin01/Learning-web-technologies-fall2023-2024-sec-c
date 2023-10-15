<?php



session_start();
$oldPassword=$_SESSION['user']['password'];

if(isset($_REQUEST['newPassword'])){
$newPassword=$_REQUEST['newPassword'];
$confirmPassword=$_REQUEST['confirmPassword'];
$currentPassword=$_REQUEST['currentPassword'];
}

if($oldPassword==$currentPassword){

if($oldPassword==$newPassword){
    echo "New Password should not be same as the Current Password";
}
else if($newPassword!=$confirmPassword){
    echo "New Password must match with the Retyped Password";
}

else{
    $_SESSION['user']['password']=$newPassword;
    echo "Password changed and your new password is".$_SESSION['user']['password'];
}

}
else{
    echo "Passwoerd doesn't match";
}

?>