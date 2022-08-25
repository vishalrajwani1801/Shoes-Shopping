<?php
	require_once('connection.php');
	require_once('header.php');
?>


<div class="banner">
		<div class="container">
			<div class="span_1_of_1">
			<?php
					$sql = "SELECT * FROM `contect`";
					$result = mysqli_query($connection,$sql);
					$i = 1;

					
				    	while($row = mysqli_fetch_array($result))
						{ 
						 
						?>
			    <h2><font face="Digital, Comic sans, Rockwell" color="teal"><?php echo $row['banner_text']; ?></font></h2>
				<?php
					
					 
					   $i++;
					  }
					
					?>
			</div>
		</div>
	</div>
	<div class="index-about" style="margin-bottom:60px; margin-top:50px;">
	<div class="container">
	<?php
					$sql = "SELECT * FROM `contect`";
					$result = mysqli_query($connection,$sql);
					$i = 1;

					
				    	while($row = mysqli_fetch_array($result))
						{ 
						 
						?>
			    <h3><font face="Berlin Sans FB" color="liam"><?php echo $row['welcome_title']; ?></font></h3>
				
				<p><font face="arial" color="DARKSALMON"><?php echo $row['welcome_text']; ?></font</p>
				<?php
					
					 
					   $i++;
					  }
					
					?>
			 </div>
			  
		</div>
	<div class="grid_1">
		<h3><font face="Berlin Sans FB" color="liam">Over Million Stocks Of Shoes</h3></font>
			
		<div class="col-md-1 ">

		</div>
		
		
		<?php
					$sql = "SELECT * FROM `category` ORDER BY cat_id DESC LIMIT 0,3";
					$result = mysqli_query($connection,$sql);
					$i = 1;

					
				    	while($row = mysqli_fetch_array($result))
						{ 
						?>	
	<div class="col-md-2 col_1">
			<a href="product-listing.php?id=<?php echo $row['cat_id']; ?>"><img style="width:250px;height:100px;"  src="admin-panel/uploads/<?php echo $row['cat_img']; ?>" class="img-responsive img1" alt=""/></a>
				<h2 class="size" style="text-align:center;"><a href="product-listing.php?id=<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name'];?></a></font></h2>
		</div>
		
		
		
		 <?php
					
					 
					   $i++;
					  }
					
					?>
		
		<div class="clearfix"> </div>
	</div>


<?php
	require_once('footer.php');
?>