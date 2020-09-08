
 <?php
        require_once __DIR__ . "/../conMod.php";
        $db = new DB();
        $con = $db->getConnection();
        ?>
<?php

if(isset($_GET['did'])){
    $id = $_GET['did'];
    
     $result33 = mysqli_query($con, "select * from member where mid ='$id'") or die(mysqli_error($con));
                            if($result133 = mysqli_fetch_array($result33)) {
                                ?>                                                                                                                                                                           <div class="grid-1 ">                                       
                                                                                                            
																									
								<div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box user-icon mb-30">
                                            <input type="text" placeholder="First name" id="t1" name="t1" value="<?php echo $result133['fnam']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box subject-icon mb-30">
                                            <input type="text" placeholder="Last name" id="t2" name="t2" value="<?php echo $result133['lnam']; ?>">
                                        </div>
                                    </div>
									<div class="col-lg-6 col-md-6">
                                        <div class="form-box user-icon mb-30">
                                            <input type="text" placeholder="Address" id="t3" name="t3" value="<?php echo $result133['address']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box subject-icon mb-30">
                                            <input type="text" placeholder="PIN" id="t4" name="t4" value="<?php echo $result133['pin']; ?>">
                                        </div>
                                    </div>
									<div class="col-lg-6 col-md-6">
                                        <div class="form-box user-icon mb-30">
                                            <input type="text" placeholder="Phone" id="t5" name="t5" value="<?php echo $result133['phone']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box subject-icon mb-30">
                                            <input type="text" placeholder="E-mail" id="t6" name="t6" value="<?php echo $result133['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box subject-icon mb-30">
                                            <input type="text" placeholder="Age" id="t7" name="t7" value="<?php echo $result133['age']; ?>">
                                        </div>
                                    </div>
									
                                </div>
																										
                                                                                                                                                                                                        
                                                                                                                                                                                                                


<input type="hidden" name="hdepid" value="<?php echo $result133['mid']; ?>"/>

                 


    <div class="tp">
<div class="col-lg-12">
                                        <div class="submit-info">
                                            <button class="btn" name="add" id="add" type="submit" onclick="return validatefiled();">Submit</button>
                                        </div>
                                    </div>
                                                                                                                                                                                                                 </div>         
<?php
                              
                            }
                            }
                                ?>

