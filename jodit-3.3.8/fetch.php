 <?php  
 include ('../connection.php');
 
								
							   $num_rows1 = mysqli_query($conn,"SELECT * FROM insert_image_mapp");
														  
									
									  while ($row = mysqli_fetch_array($num_rows1)) {
										  $design = $row['design'];
										  echo html_entity_decode(htmlspecialchars_decode($design));
									  }