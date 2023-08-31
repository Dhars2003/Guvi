<?php
										$query2 = "SELECT * FROM family where id='$s'";
										$query_run2 = mysqli_query($db, $query2);

										if(mysqli_num_rows($query_run2) > 0)
										{
											$sn=1;
											foreach($query_run2 as $student2)
											{
                                    ?>

                                            <tr>
                                                <td><?php echo $sn;?></td>
												 <td><?= $student2['name'] ?></td> 
												 <td><?= $student2['relationship'] ?></td>
												  <td><?= $student2['mobile'] ?></td>

                                                
										
										</td>
                                                
                                            </tr>

                                     <?php
											}
												$sn=$sn+1;
                            }
                            ?>