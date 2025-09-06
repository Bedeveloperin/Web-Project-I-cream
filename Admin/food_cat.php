<?php include "header.php"; ?>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="content">
	<form action="" method="post">
	<table style="box-shadow: 1px 3px 15px 2px; border:0;  background-color: white; width:40%; align-text:center;" cellpadding="10" cellspacing="15" >
	<tr class="item-align:center;">
			<td class="title">Upload New Food Category</td>
    </tr>

   <tr class="item-align: center;">   
   	    <td> 
   	    	<select class="text" name="cat">
   	    		<option value="kathiyawadi"> Ice cream</option>
   	    		<option value="rajsthani">Cone Ice cream</option>
   	    		<option value="rise"> Pastry</option>
   	    		<option value="tava">Cup cack </option>
   	    	</select>
   	    </td>
   	</tr>  
	<tr class="item-align: center;">
			<td><input type="text" name="scat" value="" placeholder="" class="text" required></td>
	</tr>
	<tr class="item-align: center;">
			<td><input type="submit" name="s" value="   Upload Now   " class="btn"></td>
	</tr>
</table>
</form>
<?php
if(isset($_POST['s']))
{
	include "connect.php";
	$cat = $_POST['cat'];
	$scat = $_POST['scat'];
	mysqli_query($con, "insert into food_cat(catnm,sub_cat) values('$cat','$scat')") or die(mysqli_error($con));
	echo "<script>alert('Category Upload SuccessFully');</script>";
	echo "<div style='color:red; font-size:1.5em; font-family:arial; text-align:center;'>Category Uploaded</div>";
}


?>
</div>
<?php include "footer.php"; ?>