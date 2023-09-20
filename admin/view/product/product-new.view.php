<?php
require_once view_path('partials/header');
?>
<style>
  @import url('dist/css/brand-style.css');
</style>
<!-- Google Font: Source Sans Pro -->

  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <!-- Main content -->
     <section class="content-header mt-5">
      <div class="container col-md-8">
      
        <div class="card shadow bg-secondary">
        
              <!-- /.card-header -->
              <div class="card-body">
                    <div class="card-header mb-3">
                      <div class="row mb-2">
                        <div class="col-sm-12">
                          <h4 class="fw-bold text-center text-primary" style="font-weight: bolder;"><strong><i class="fa fa-hamburger"></i> Add New Product</strong></h4>
                        </div>
                      </div>
                    </div>
                    
               <form action="" method="POST" enctype="multipart/form-data">
               <div class="mb-3">
                  <label for="">Pcode</label>
                  <input readonly type="text" name="pcode" id="pcode" class="form-control bg-dark" autocomplete="off" value="PC-<?php echo $beta; ?>"> 
                </div>
                <div class="mb-3">
                  <label for="">Name</label>
                  <input value="<?=set_value('p_name')?>" type="text" name="p_name" id="p_name" class="form-control <?=!empty($error['p_name']) ? 'border-danger' : '' ;?>" autocomplete="off" >
                  <?php if(!empty($error['p_name'])):?><small class="text-danger"><?=$error['p_name']?></small><?php endif; ?>
                </div>
                <div class="mb-3">
                  <label for="">Description</label>
                  <input value="<?=set_value('description')?>" type="text" name="description" id="description" class="form-control <?=!empty($error['description']) ? 'border-danger' : '' ;?>" autocomplete="off" >
                  <?php if(!empty($error['description'])):?><small class="text-danger"><?=$error['description']?></small><?php endif; ?>
                </div>


                <div class="mb-3">
                  <label for="">Cost</label>
                  <input value="<?=set_value('cost')?>" type="number" name="cost" id="cost" class="form-control <?=!empty($error['cost']) ? 'border-danger' : '' ;?>" autocomplete="off" >
                  <?php if(!empty($error['cost'])):?><small class="text-danger"><?=$error['cost']?></small><?php endif; ?>
                </div>

                <div class="mb-3">
                  <label for="">Price</label>
                  <input value="<?=set_value('price')?>" type="number" name="price" id="price" class="form-control <?=!empty($error['price']) ? 'border-danger' : '' ;?>" autocomplete="off" >
                  <?php if(!empty($error['price'])):?><small class="text-danger"><?=$error['price']?></small><?php endif; ?>
                </div>

                <div class="mb-3 row">
                      <div class="col-10">
                                <label for="formFile" class="form-label fw-bold">Product Image</label>
                                <input  value="<?=set_value('image')?>" type="file" name="image" class="form-control bg-dark <?=!empty($error['image']) ? 'border-danger' : '' ;?>" placeholder="No file selected."  aria-label="Username" aria-describedby="basic-addon1">
                                <?php if(!empty($error['image'])):?><small class="text-danger"><?=$error['image']?></small><?php endif; ?>
                      </div>
                      <div class="col-2 text-center mt-1">
                      <label for="">Display to POS</label>
                          <br/>
                          <input <?=set_value('category') == true ? 'checked' : ''?> type="checkbox" class="form-check-input text-primary" name="category" checked style="width:30px;height:30px">
                      </div>
                       
                  </div>
                        
                <div class="row d-flex">
                  <div class="col-sm-6 mt-2">
                      <a href="index.php?pg=product"><button type="button" class="btn px-5 bg-dark text-primary">
                            Back
                          </button></a>
                  </div>
                  <div class="col-sm-6  mt-2">
                <button class="btn px-5 float-end bg-dark text-primary">Save</button>
                  </div>
              </div>
            
               </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          </section>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->


  
  <?php
  require view_path('partials/footer');
  ?>
  