<?php 
require_once view_path('partials/header');
?>
<style>
  @import url('dist/css/brand-style.css');
</style>

 <div class="content-wrapper">
 <section class="content-header">
      <div class="container-fluid">
     
      </div>
   
      <div class="container-fluid col-md-8">
        <div class="card mt-5 shadow bg-secondary">
       <div class="card-header mt-2">
        <div class="col-sm-12">
            <h4 class="fw-bold text-center text-primary" style="font-weight: bolder;"><i class="fa fa-user"></i> Edit User</h4>
          </div>
        </div>
        <div class="card-body">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="col-sm-12">
              <div class="mb-3">
                <label for="">Name</label>        
                  <input autofocus value="<?=set_value('name',$row['name'])?>" type="text" class="form-control <?=!empty($error['name']) ? 'border-danger' : '' ;?>" name="name">
                    <?php if(!empty($error['name'])):?><small class="text-danger"><?=$error['name']?></small><?php endif; ?>
              </div> 

             <div class="mb-3">
                <label for="">Email</label>
                  <input value="<?=set_value('email',$row['email'])?>" type="email" class="form-control bg-dark <?=!empty($error['email']) ? 'border-danger' : '' ;?>" name="email" readonly>
                  <?php if(!empty($error['email'])):?><small class="text-danger"><?=$error['email']?></small><?php endif; ?>
              </div>

              <div class="mb-3">
                <label for="">Phone</label>
                  <input value="<?=set_value('phone',$row['phone'])?>" type="number" class="form-control <?=!empty($error['phone']) ? 'border-danger' : '' ;?>" name="phone">
                  <?php if(!empty($error['phone'])):?><small class="text-danger"><?=$error['phone']?></small><?php endif; ?>
              </div>      
          
                <div class="mb-3">
                    <label for="">Password</label>
                        <input value="<?=set_value('password','')?>" placeholder="Password(Leave empty to retain current password)" type="password" class="form-control" name="password">
                        <?php if(!empty($error['password'])):?><small class="text-danger"><?=$error['password']?></small><?php endif; ?>
                  </div>

                  <div class="mb-3">
                  <label for="">Confirm Password</label>
                    <input value="<?=set_value('retype-password', '');?>" placeholder="Password(Leave empty to retain current password)" type="password" class="form-control <?=!empty($error['retype-password']) ? 'border-danger' : '' ;?>" name="retype-password">
                    <?php if(!empty($error['retype-password'])):?><small class="text-danger"><?=$error['retype-password']?></small><?php endif; ?>
                  </div>


                    <div class="mb-3">
                        <label for="">Select Position</label>
                       <select value="" name="role" id="" type="text" class="form-control bg-dark <?=!empty($error['role']) ? 'border-danger' : '' ;?>">
                       <option value="<?=set_value('role',$row['role'])?>" selected hidden><?=set_value('role',$row['role'])?></option>
                        <option value="admin">Admin</option>
                        <option value="cashier">Cashier</option>
                       </select>
                      
                    </div>
                
                    <div class="mb-3 row">
                    <div class="col-8">
                       <label for="formFile" class="form-label fw-bold">Product Image</label>
                            <input  value="<?=set_value('image',$row['image'])?>" type="file" name="image" class="form-control bg-dark <?=!empty($error['image']) ? 'border-danger' : '' ;?>" placeholder="No file selected."  aria-label="Username" aria-describedby="basic-addon1">
                             <?php if(!empty($error['image'])):?><small class="text-danger"><?=$error['image']?></small><?php endif; ?>
                    </div>
                    <div class="col-2">
                        <center><img class="rounded-circle me-lg-2 mx-auto mb-3 mt-3" src="<?=$row['image']?>" alt=""  style="width:100%;max-width:100px;height:100%;max-height:100px;"></center>
                    </div>
                    <div class="col-2 text-center  mt-3">
                      <label for="">Activate/De-activate</label>
                          <br/>
                          <input type="radio" class="form-check-input text-primary ms-0" name="verify_status" value="1" style="width:20px;height:20px" <?=set_value('verify_status', $row['verify_status'] == 1 ? 'checked' : '');?>>
                          <input type="radio" class="form-check-input text-primary ms-2" name="verify_status" value="0" style="width:20px;height:20px" <?=set_value('verify_status', $row['verify_status'] == 0 ? 'checked' : '');?>>
                      </div>
                    
                  </div>
                    <div class="row-sm-12 d-flex ">
                      <div class="col-sm-6">
                             <a href="index.php?pg=user" class="btn btn-dark text-primary hover px-5" >Back</a>
                      </div>
                      <div class="col-sm-6 text-right">
                          <button class="btn btn-dark px-5 float-end text-primary" >Update</button>
                      </div>
                    </div>
              </div>
            </form>
          </div>      
        </div>        
      </div>
 </section>
 </div>
<?php 
include view_path('partials/footer');
?>