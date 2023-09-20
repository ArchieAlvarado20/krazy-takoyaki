<?php
require_once view_path('partials/header');
?>
<!-- Google Font: Source Sans Pro -->

  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  
     <!-- Main content -->
     <section class="content-header">
      <div class="container col-md-8 mt-5">
      
        <div class="card shadow bg-secondary">
        
              <!-- /.card-header -->
              <div class="card-body">
              <h3 class="fw-bold text-center text-primary"><strong><i class="fa fa-hamburger"></i> Edit Product</strong></h1>
              <?php if(!empty($row)):?>
              <form action="" method="POST" enctype="multipart/form-data">
              
               <div class="mb-3">
                  <label for="">Pcode</label>
                  <input readonly type="text" name="pcode" id="pcode" class="form-control bg-dark" autocomplete="off" value="<?=set_value('pcode',$row['pcode'])?>">
                  <?php if(!empty($error['pcode'])):?><small class="text-danger"><?=$error['pcode']?></small><?php endif; ?>
                
                </div>
                <div class="mb-3">
                  <label for="">Name</label>
                  <input type="text" name="p_name" id="p_name" class="form-control bg-dark" autocomplete="off" value="<?=set_value('p_name',$row['p_name'])?>">
                  <?php if(!empty($error['p_name'])):?><small class="text-danger"><?=$error['p_name']?></small><?php endif; ?>
                
                </div>
                <div class="mb-3">
                  <label for="">Description</label>
                  <input type="text" name="description" id="description" class="form-control bg-dark" autocomplete="off" value="<?=set_value('description',$row['description'])?>">
                  <?php if(!empty($error['description'])):?><small class="text-danger"><?=$error['description']?></small><?php endif; ?>
                
                </div>

                <div class="mb-3">
                  <label for="">Price</label>
                  <input type="number" name="price" id="price" class="form-control bg-dark" autocomplete="off" value="<?=set_value('price',$row['price'])?>">
                  <?php if(!empty($error['price'])):?><small class="text-danger"><?=$error['price']?></small><?php endif; ?>
                
                </div>
                <div class="mb-3 row">
                    <div class="col">
                       <label for="formFile" class="form-label fw-bold">Product Image</label>
                            <input  value="<?=set_value('image',$row['image'])?>" type="file" name="image" class="form-control bg-dark <?=!empty($error['image']) ? 'border-danger' : '' ;?>" placeholder="No file selected."  aria-label="Username" aria-describedby="basic-addon1">
                             <?php if(!empty($error['image'])):?><small class="text-danger"><?=$error['image']?></small><?php endif; ?>
                    </div>
                    <div class="col mt-1">
                    
                      <label for="">Display to POS</label>
                          <br/>
                          <input <?php if(!empty($row['category'])){?><?=set_value('category', $row['category'] == true ? 'checked' : '');?>
                            <?php }else{?>
                              <?=set_value('category', $row['category'] == false ? '' : 'checked');?>
                              <?php } ?>
                            type="checkbox" class="form-check-input text-primary" name="category" style="width:30px;height:30px">
                    
                    </div>
                    <div class="col">
                        <center><img src="<?=$row['image']?>" alt="" class="mx-auto mb-3 mt-3" style="width:100%;max-width:100px;height:100%;max-height:100px;"></center>
                    </div>
                    
                  </div>

                <div class="row-sm-12 d-flex">
                  <div class="col-sm-6">
                     <a href="index.php?pg=product"><button type="button" class="btn btn-dark  text-primary px-5">
                          Back
                        </button></a>
                  </div>
                   <div class="col-sm-6">
                     <button type="submit" class="btn btn-dark text-primary float-end px-5">Save</button>
                   </div>
                     
                  </div>
            
               </form>
               <?php else: ?>
                No product was found.
                <br><br>
            
                    <a href="index.php?pg=admin&tab=product">
                        <button type="button" class="col-md-5 btn btn-dark me-1">Back</button>
                    </a>
    
             <?php endif; ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
         
          <!-- /.col -->
            <!-- /.container-fluid -->
    </section>
        </div>
        <!-- /.row -->
      </div>
    

  <?php
  require view_path('partials/footer');
  ?>