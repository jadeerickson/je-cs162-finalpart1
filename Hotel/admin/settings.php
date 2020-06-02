<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      
                                 
            <?php
						include ('db.php');
						$sql = "select * from room";
						$re = mysqli_query($con,$sql)
				?>
                <div class="row">
				
				
				<?php
										while($row= mysqli_fetch_array($re))
										{
												$id = $row['type'];
											if($id == "Bedroom") 
											{
												echo
														<div class='panel-body'>
															<h3>".$row['bed']."</h3>
														</div>
														<div class='panel-footer back-footer-blue'>
															".$row['type']."

														</div>
													</div>
												</div>";
											}
											else if ($id == "Studio")
											{
												echo"<div class=
															<h3>".$row['bed']."</h3>
														</div>
														<div class=>
															".$row['type']."

														</div>
													</div>
												</div>";
											
											}
											else if($id =="Bedroom")
											{
												echo"<div class=
															<h3>".$row['bedding']."</h3>
														</div>
														<div class=
															".$row['type']."

														</div>
													</div>
												</div>";
											
											}
											else if($id =="Bedroom")
											{
												echo"<div class=
															<h3>".$row['bed']."</h3>
														</div>
															".$row['type']."

														</div>
													</div>
												</div>";
											
											}
										}
									?>
                    
               
    
   
</body>
</html>
