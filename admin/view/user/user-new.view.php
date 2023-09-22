<?php 
require_once view_path('partials/header');
?>
<style>
  @import url('dist/css/brand-style.css');
</style>

 <div class="content-wrapper">
 <section class="content-header">
      <div class="container-fluid">
     
    

      <div class="container-fluid col-md-8">
        <div class="card mt-5 shadow mb-5 bg-secondary">
       <div class="card-header mt-2">
        <div class="col-sm-12">
            <h4 class="fw-bold text-center text-primary" style="font-weight: bolder;"><i class="fa fa-user"></i> Add New User</h4>
          </div>
        </div>
        <div class="card-body">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="col-sm-12">
              <div class="mb-3">
                <label for="">Name</label>        
                  <input autofocus value="<?=set_value('name')?>" type="text" class="form-control bg-dark <?=!empty($error['name']) ? 'border-danger' : '' ;?>" name="name">
                    <?php if(!empty($error['name'])):?><small class="text-danger"><?=$error['name']?></small><?php endif; ?>
              </div> 

             <div class="mb-3">
                <label for="">Email</label>
                  <input value="<?=set_value('email')?>" type="email" class="form-control bg-dark <?=!empty($error['email']) ? 'border-danger' : '' ;?>" name="email">
                  <?php if(!empty($error['email'])):?><small class="text-danger"><?=$error['email']?></small><?php endif; ?>
              </div>

              <div class="mb-3">
                <label for="">Phone</label>
                  <input value="<?=set_value('phone')?>" type="text" class="form-control bg-dark <?=!empty($error['phone']) ? 'border-danger' : '' ;?>" name="phone">
                  <?php if(!empty($error['phone'])):?><small class="text-danger"><?=$error['phone']?></small><?php endif; ?>
              </div>      
          
                <div class="mb-3">
                    <label for="">Password</label>
                        <input value="<?=set_value('password')?>" type="password" class="form-control bg-dark <?=!empty($error['phone']) ? 'border-danger' : '' ;?>" name="password">
                        <?php if(!empty($error['password'])):?><small class="text-danger"><?=$error['password']?></small><?php endif; ?>
                  </div>

                  <div class="mb-3">
                  <label for="">Confirm Password</label>
                    <input value="<?=set_value('retype-password')?>" type="password" class="form-control bg-dark <?=!empty($error['retype-password']) ? 'border-danger' : '' ;?>" name="retype-password">
                    <?php if(!empty($error['retype-password'])):?><small class="text-danger"><?=$error['retype-password']?></small><?php endif; ?>
                  </div>


                    <div class="mb-3">
                        <label for="">Select Position</label>
                       <select value="<?=set_value('role')?>" name="role" id="" class="form-control bg-dark <?=!empty($error['role']) ? 'border-danger' : '' ;?>">
                        <option value="admin">Admin</option>
                        <option value="cashier">Cashier</option>
                       </select>
                      
                    </div>
                  
                    <div class="mb-3 mt-1 row d-flex">
                      <div class="col-10">
                          <label for="formFile" class="form-label fw-bold">User Image</label>
                            <input  value="<?=set_value('image')?>" type="file" name="image" class="form-control bg-dark <?=!empty($error['image']) ? 'border-danger' : '' ;?>" placeholder="No file selected."  aria-label="Username" aria-describedby="basic-addon1">
                             <?php if(!empty($error['image'])):?><small class="text-danger"><?=$error['image']?></small><?php endif; ?>
                      </div>
                      <div class="col-2 text-center  mt-3">
                      <label for="">Activate/De-activate</label>
                          <br/>
                          <input type="radio" class="form-check-input text-primary ms-0" name="verify_status" value="1" style="width:20px;height:20px" checked>
                          <input type="radio" class="form-check-input text-primary ms-2" name="verify_status" value="0" style="width:20px;height:20px">
                      </div>
                    </div>
                  
                    <div class="row d-flex">
                        <div class="col-md-6">
                          <a href="index.php?pg=user" class="btn btn-dark text-primary px-5">Back</a>
                        </div>
                     <div class="col-sm-6">
                         <button class="btn btn-dark text-primary px-5 float-end">Save</button>
                     </div>
                       
                      </div>
                    </div>
                    </div>
                  
              </div>
            </form>
          </div>           
    
      </div>
      </section>
 </div>
<?php 
include view_path('partials/footer');
?>