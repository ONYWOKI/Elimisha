<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
<?php include_once("templates/links.php");?>
</head>
<body>

<?php include_once("templates/header.php");?>
<?php include_once("templates/main_menu.php");?>

<div class="maincontainer">
<center><h1>Edit your profile</h1></center>
<form enctype="multipart/form-data" ><!-- edit profile form-->
<div class="edit-profile-left">
 <div class="form-group">
    <label for="exampleInputEmail1"><b>Username:</b> <span > Edwin</span></label>
    <button class="fas fa-edit edit-right" id="edit-username-btn">Edit</button>
    <input type="text" class="form-control " id="edit-username-field" aria-describedby="emailHelp" placeholder="Enter username" style="display: none">
    <small id="edit-username-error" class="form-text text-muted" style="color: red;"></small>
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1"><b>Email:</b> <span > edwinonywoki@yahoo.com</span></label>
     <button class="fas fa-edit edit-right" id="edit-email-btn">Edit</button>
    <input type="email"  class="form-control"id="edit-email-field"aria-describedby="emailHelp" placeholder="Enter email" style="display: none">
    <small id="edit-email-error" class="form-text text-muted" style="color: red;"></small>
  </div>
 <div class="form-group">
    <label for="exampleInputEmail1"><b>My best subjects:</b></label>
     <button class="fas fa-edit edit-right" id="edit-subject-btn">Edit</button>
    <ol>
    	<li>Maths</li>
    	<li>Physics</li>
    	<li>History</li>
    </ol>
   <select name="" multiple="3" style="display: none;" id="edit-subject-select">
   	<option>Maths</option>
   		<option>Kiswahili</option>
   			<option>Biology</option>
   				<option>Chemistry</option>
   </select>
    <small id="edit-subject-error" class="form-text text-muted" style="color: red;"></small>
  </div>
   <button class="fas fa-edit btn-change-password" id="btn-change-password">Change your password</button>

 <div style="display: none;" id="divchangepwd">
      <div class="form-group" id="edit-password-div">
    <input type="password" class="form-control hidme" id="oldpwd" aria-describedby="emailHelp" placeholder="Enter old password" >
    <small id="oldpwd-error" class="form-text text-muted" style="color: red;"></small>
  </div>
     <div class="form-group" >
    <input type="password" class="form-control hidme" id="newpwd" aria-describedby="emailHelp" placeholder="Enter new password" >
    <small id="newpwd-error" class="form-text text-muted" style="color: red;"></small>
  </div>
      <div class="form-group">
    <input type="password" class="form-control hidme" id="confirm-pwd" aria-describedby="emailHelp" placeholder="Confirm new password" >
    <small id="confirm-pwd-error" class="form-text text-muted" style="color: red;"></small>
  </div>
 </div>

</div>



<div class="edit-profile-right">
	<div class="edit-profile-img" id="edit-profile-img">
		<img src="img/profile.jpg" alt="Profile Image">
	</div>
	<input type="file" name="" hidden="hidden" id="realfile">
	<button class="choose-profile-img-btn" id="choose-profile-img-btn">Choose Profile image</button><span id="filechosen">No file chosen</span>
</div>
<div style="width: 100%; float: left;">
<center>
	<button class="btn-primary formbtn fas fa-save">&nbsp;Save changes</button>
<button class="btn-danger formbtn fas fa-times">&nbsp;Cancel</button>
</center>
</div>
</form>
<script type="text/javascript">
$(document).ready(function(){
$("#choose-profile-img-btn").click(function(event){
  event.preventDefault();
$("#realfile").click();

$("#realfile").on('change' ,function(event){
event.preventDefault();
var files=this.files;
var reader=new FileReader();
var name=this.value;
reader.onload=function(e){
  //alert("");
  e.preventDefault();
$("#filechosen").text(name);
  $("#edit-profile-img").empty();
   $("#edit-profile-img").append("<img src='"+e.target.result+"' width='100%' height='100%' />");
};

  reader.readAsDataURL(files[0]);


 //$("#edit-profile-img").html("<img src='"+$("#realfile").val()+"'></img>");
});
});

//Toggle to display inputs
$("#edit-username-btn").click(function(event){
 event.preventDefault();
  $("#edit-username-field").stop()
	$("#edit-username-field").slideToggle();

});

$("#edit-email-btn").click(function(event){
   event.preventDefault();
   $("#edit-email-field").stop();
  $("#edit-email-field").toggle(300);

});
$("#edit-subject-btn").click(function(event){
 event.preventDefault();
  $("#edit-subject-select").stop();
  $("#edit-subject-select").toggle(300);
  
 

});
$("#btn-change-password").click(function(event){
  event.preventDefault();
    $("#divchangepwd").stop();
  $("#divchangepwd").toggle(300);
});

	});
</script>
</div>
</body>
<?php include_once("templates/footer.php");?>
</html>