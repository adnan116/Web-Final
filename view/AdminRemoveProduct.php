<?php 
	
	session_start();

	if (isset($_SESSION['username'])) {	
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Remove Product</title>
	<link rel="stylesheet" type="text/css" href="../css/Navigate.css">
	<link rel="stylesheet" type="text/css" href="../css/Design.css">
</head>
<body style="background-color: CornflowerBlue;">
	<div class="nav">

		<a href="AdminHome.php" class="a1">Home</a>

		<div class="dropdown">
			<button class="dropbtn">Products</button>
		    <div class="dropdown-content">
		    	<a href="AdminAddProduct.php">Add Product</a>
		    	<a href="AdminProductDetails.php">Product Details</a>
		    	<a href="AdminAddCategory.php">Add Category</a>
		    	<a href="AdminAddSubCategory.php">Add Sub-Category</a>
		  	</div>
		</div>

		<div class="dropdown">
			<button class="dropbtn">Manage Users</button>
		    <div class="dropdown-content">
		    	<a href="AdminAddUser.php">Add User</a>
		    	<a href="AdminUserDetails.php">User Details</a>
		  	</div>
		</div>

		<div class="dropdown">
			<button class="dropbtn">Sales Report</button>
		    <div class="dropdown-content">
		    	<a href="AdminGenerateReport.php">Generate Report</a>
		  	</div>
		</div>

		<div class="dropdown">
			<button class="dropbtn">Promo Code</button>
		    <div class="dropdown-content">
		    	<a href="AdminGeneratePromoCode.php">Generate Promo Code</a>
		    	<a href="AdminPromoCodeDetails.php">Promo Code Details</a>
		  	</div>
		</div>

		<div class="dropdown">
			<button class="dropbtn">Profile</button>
		    <div class="dropdown-content">
		    	<a href="AdminProfileView.php">My Profile</a>
		    	<a href="AdminChangePassword.php">Change Password</a>
		    	<a href="../php/AdminLogout.php">Logout</a>
		  	</div>
		</div>
	</div>
	<form method="POST" action="">
		
		<table align="center" bgcolor="CornflowerBlue" cellspacing="30px">
			<tr>
				<td colspan="4">
					<center><h1><font color="DarkBlue" face="Cursive"><u>Remove Product</u></font></h1></center>
				</td>
			<tr>
				<td colspan="4" align="right">
					<input type="text" name="search" placeholder="Search Product">
					<button type="button" class="btn">Search</button>
				</td>
			</tr>
			</tr>
			<tr>
				<td>
					Product ID:
				</td>
				<td>
					<input type="text" name="pid" placeholder="Enter Product ID" disabled>
				</td>
				<td>
					Product Name:
				</td>
				<td>
					<input type="text" name="pname" placeholder="Enter Product Name" disabled>
				</td>
			</tr>
			<tr>
				<td>
					Sub-Category:
				</td>
				<td>
					<input type="text" name="pname" placeholder="Enter Product Sub-Category" disabled>
				</td>
				<td>
					Quantity:
				</td>
				<td>
					<input type="number" name="quantity" placeholder="Enter Quantity" disabled>
				</td>
			</tr>
			<tr>
				<td>
					Buying Price:
				</td>
				<td>
					<input type="number" name="buyprice" placeholder="Enter Buying Price" disabled>
				</td>
				<td>
					Selling Price:
				</td>
				<td>
					<input type="number" name="sellprice" placeholder="Enter Selling Price" disabled>
				</td>
			</tr>
			<tr>
				<td>
					Incoming Date:
				</td>
				<td>
					<input type="date" name="incomedate" disabled>
				</td>
				<td>
					Description:
				</td>
				<td>
					<textarea placeholder="Enter Product Description" name="describe" disabled></textarea>
				</td>
			</tr>
			<tr>
				<td>
					Activity:
				</td>
				<td>
					<input type="text" name="activity" placeholder="Enter Product Activity" disabled>
				</td>
				<td>
					Image:
				</td>
				<td>
					<input type="file" name="image" disabled>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Remove Product">
				</td>
				<td >
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php
	}else{
		header('location: ../adminLogin.php');
	}
?>