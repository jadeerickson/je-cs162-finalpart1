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
			
				<?php 
				//index.php
				//$connect = mysqli_connect("localhost", "root", "", "hotel");
				include('db.php');
				
					
					$query = "SELECT * FROM payment";
					$result = mysqli_query($con, $query);
					$chart_data = '';
					$tot = 0;
					while($row = mysqli_fetch_array($result))
					{
					 $chart_data .= "{ date:'".$row["cout"]."', profit:".$row["fintot"] *10/100 ."}, ";
					 $tot = $tot + $row["fintot"] *10/100;
					}
					$chart_data = substr($chart_data, 0, -2);
				
?>
				 
				<br>
				<br>
				<br>
				<br><div id="chart"></div>
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>ID</th>
                                            <th>Name</th>
                                            <th>Check in</th>
											<th>Check out</th>
                                            <th>Room Rent</th>
											<th>Room</th>
											<th>Gr.Total</th>
											
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										
										$sql="select * from payment";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{
										
											$id = $row['id'];
											
											if($id % 2 ==1 )
											{
												echo"<tr class='gradeC'>
													<td>".$row['id']." </td>
													<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
													<td>".$row['cin']."</td>
													<td>".$row['cout']."</td>
													
													
													<td>$".$row['ttot']."</td>
													<td>$".$row['mepr']."</td>
													<td>$".$row['btot']."</td>
													<td>$".$row['fintot']."</td>
													<td>$".$row['fintot']*10/100 ."</td>
													</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
													<td>".$row['id']." </td>
													<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
													
													<td>".$row['cin']."</td>
													<td>".$row['cout']."</td>
													
													
													<td>$".$row['ttot']."</td>
													<td>$".$row['mepr']."</td>
													<td>$".$row['btot']."</td>
													<td>$".$row['fintot']."</td>
													<td>$".$row['fintot']*10/100 ."</td>
													</tr>";
											
											}
										
										}
										
									?>
                                        
                                    </tbody>
                                </table>
                            </div>
                           