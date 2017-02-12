				<tr>
								   <td></td> 
								   <td class="numberu"></td> 
								   <td>CWA:</td> 
								   <td>
											      <?php
							
                            $result1 = mysql_query("SELECT sum(gen_ave) FROM grade  where student_id = '$get_id'") or die(mysql_error());
                            
							
							
							
							$test_count1=mysql_query("select * from grade where gen_ave <> '' and student_id = '$get_id'  ")or die(mysql_error());
							$count_gen1 = mysql_num_rows($test_count1);
							
							while ($rows1 = mysql_fetch_array($result1)) {
							
							
							
                                ?>
						
									<?php if ($count_gen1  <= 0){ ?>
									 
							<?php }else{ ?>
									<?php $ave1 = $rows1['sum(gen_ave)']; 
											  $equal1 = $ave1 / $count_gen1;
											  echo round($equal1 , 2);
									?>
						
                            <?php } }?>
								   
								   </td> 
								   <td></td> 
								   <td></td> 
								</tr>