						<tr>
								   <td></td> 
								   <td class="numberu">Number of Units:</td> 
								   <td> 					
								   <?php
                            $result = mysql_query("SELECT sum(unit) FROM grade  where student_id = '$student_id' and school_year like '%$school_year%' and semester like '%$semester%'") or die(mysql_error());
                            while ($rows = mysql_fetch_array($result)) {
                                ?>
						
								 <?php echo $rows['sum(unit)']; ?>
							
                            <?php } ?>
							
									</td> 
								   <td></td> 
								   <td></td> 
								   <td></td> 
								</tr>