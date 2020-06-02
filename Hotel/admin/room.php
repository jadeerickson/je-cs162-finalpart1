<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>

<head>
       
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ADD NEW ROOM
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label>Type Of Room *</label>
                                            <select name="troom"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Bedroom">Bedroom</option>
                                                <option value="Studio">Studio</option>
												<option value="Confrence">Confrence</option>
                                            </select>
                              </div>
							  
								<div class="form-group">
                                            <label>Bedding Type</label>
                                            <select name="bed" class="form-control" required>
												<option value selected ></option>
                                                <option value="Double">Double</option>
                                                <option value="Queen">Queen</option>
												<option value="King">King</option>
                                                                                             
                                            </select>
                                            
                               </div>
							 <input type="submit" name="add" value="Add New" class="btn btn-primary"> 
							</form>
							<?php
							 include('db.php');
							 if(isset($_POST['add']))
							 {
										$room = $_POST['troom'];
										$bed = $_POST['bed'];
	
										
										$check="SELECT * FROM room WHERE type = '$room' AND bedding = '$bed'";
										$rs = mysqli_query($con,$check);
										$data = mysqli_fetch_array($rs, MYSQLI_NUM);
										if($data[0] > 1) {
											echo "<script type='text/javascript'> alert('Room Already in Exists')</script>";
											
										}

										else
										{
							 
										
										$sql ="INSERT INTO `room`( `type`, `bed`) VALUES ('$room','$bed')" ;
										if(mysqli_query($con,$sql))
										{
										 echo '<script>alert("New Room Added") </script>' ;
										}else {
											echo '<script>alert("Sorry ! Check The System") </script>' ;
										}
							 }
							}
							
							?>
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ROOMS INFORMATION
                        </div>
                        <div class="panel-body">
								<!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <?php
						$sql = "select * from room limit 0,10";
						$re = mysqli_query($con,$sql)
						?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Room ID</th>
                                            <th>Room Type</th>
											<th>Bedding</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									
									<?php
										while($row= mysqli_fetch_array($re))
										{
												$id = $row['id'];
											if($id % 2 == 0) 
											{
												echo "<tr class=odd gradeX>
													<td>".$row['id']."</td>
													<td>".$row['type']."</td>
												   <th>".$row['bedding']."</th>
												</tr>";
											}
											else
											{
												echo"<tr class=even gradeC>
													<td>".$row['id']."</td>
													<td>".$row['type']."</td>
												   <th>".$row['bedding']."</th>
												</tr>";
											
											}
										}
									?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                
                    
            
				
</body>
</html>
