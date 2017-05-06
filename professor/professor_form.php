    <!-- MAIN SECTION -->
     <section class="mainContent full-width clearfix">
     <div class="container">
        <div class="row">
             <div class="col-xs-offset-1 col-xs-10">
                <div class="panel panel-default formPanel">
                          <div class="panel-heading bg-color-1 border-color-1">
                            <h3 class="panel-title">Create  an account</h3>
                          </div>
                          <div class="panel-body">
                                <form action="add5.php" method="POST" role="form" enctype="multipart/form-data">
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                           <label for="">ชื่อ</label>
                                           <input type="text" class="form-control" name="firstname" placeholder="ชื่อ" required>
                                        </div>
                                      </div>
                                       <div class="form-group formField">
                                        <div class="col-xs-12">
                                              <label for="">นามสกุล</label>
                                               <input type="text" class="form-control" name="lastname" placeholder="นามสกุล" required>
                                        </div>
                                      </div>
                                      
                                       <div class="form-group formField">
                                        <div class="col-xs-12">
                                              <label for="">อายุ</label>
                                              <div class="bookingDrop">
                                              <select name="age" id="age" class="select-drop">
                                              <option value="0">อายุ</option>
                                              <?php 
											  	$min=25;
												  $max=60;
											  ?>
                                              <?php for($i=$min;$i<=$max;$i++):?>
                                             	 <option value="<?=$i?>"><?=$i?></option>
                                              <?php endfor;?>             
                                            </select>
                                            </div>
                                        </div>
                                      </div>

                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                              <label for="">ตำแหน่ง</label>
                                               <input type="text" class="form-control" name="position" placeholder="ตำแหน่ง" required>
                                        </div>

                                        <div class="form-group formField">
                                        <div class="col-xs-12">
                                              <label for="">จบจากมหาวิทยาลัยอะไร ?</label>
                                               <input type="text" class="form-control" name="university" placeholder="มหาวิทยาลัย" required>
                                        </div>

                                       <div class="form-group">
                                        <div class="col-xs-12">
                                              <label for="">ความสนใจพิเศษ</label>
                                              <textarea class="form-control" name="speacialist" rows="10"></textarea>
                                            </div>

                                        </div>
                                         <div class="form-group">
                                        <div class="col-xs-12">
                                              <label for="">รูปภาพ</label>
                                              <input type="file" name="img" id="img" required>
                                            </div>

                                        </div>
                                      <div class="form-group formField">
                                            <div class="col-xs-12">
                                            	<label></label>
                                                <input type="submit" class="btn btn-primary btn-block bg-color-3 border-color-3" value="Submit">
                                            </div>
                                      </div>
                                </form>
             			 </div>
            		</div>
             </div>
        </div>
          
      </div>
    </section>
    