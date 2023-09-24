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

     <section class="content-header">
      <div class="container col-md-8 mt-5">
      
        <div class="card shadow bg-secondary">
        <div class="card-header text-center text-secondary p-3">
                    <h3 class="mb-3 text-primary"><strong><i class="fa fa-hamburger"></i> Delete Raw Items</strong></h3>
                    <div class="alert bg-dark text-primary text-center alert-dismissible fade show mb-1" role="alert">Are you sure you want to delete this Raw-Item?
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                    </div>
                </div>  
              <!-- /.card-header -->
              <div class="card-body">
              <?php if(!empty($row)):?>
              <form action="" method="POST" enctype="multipart/form-data">
                
               <div class="mb-3">
                  <label for="">Pcode</label>
                  <input type="text" name="pcode" id="pcode" class="form-control bg-dark" autocomplete="off" value="<?=set_value('pcode',$row['pcode'])?>" readonly>
                </div>

                <div class="mb-3">
                  <label for="">Name</label>
                  <input type="text" name="p_name" id="p_name" class="form-control bg-dark" autocomplete="off" value="<?=set_value('p_name',$row['p_name'])?>" readonly>
                </div>
                <div class="mb-3">
                  <label for="">Description</label>
                  <input type="text" name="description" id="description" class="form-control bg-dark" autocomplete="off" value="<?=set_value('description',$row['description'])?>" readonly>
                </div>

                <div class="mb-3">
                  <label for="">Cost</label>
                  <input type="number" name="cost" id="cost" class="form-control cost bg-dark" autocomplete="off" value="<?=set_value('cost',$row['cost'])?>" readonly>
                </div>
                <div class="mb-3 row">
                    
                    <div class="col">
                        <center><img src="<?=$row['image']?>" alt="" class="mx-auto mb-3 mt-3" style="width:100%;max-width:100px;height:100%;max-height:100px;"></center>
                    </div>
                    
                  </div>
                <div class="row d-flex mt-4">
                  <div class="col-sm-6">
                    <a href="index.php?pg=raw-stocks"><button type="button" class="btn btn-dark text-primary px-5">
                          Back
                        </button></a>
                  </div>
                <div class="col-sm-6 text-right">
                     <button type="" class="btn btn-dark text-primary px-5 float-end" name="" onclick="alert('Successfully Deleted!')">Delete</button>
                </div>
             
              </div>
            
               </form>
               <?php else: ?>
                No product was found.
                <br><br>
            
                    <a href="index.php?pg=product">
                        <button type="button" class="col-md-5 btn btn-danger me-1">Back</button>
                    </a>
    
             <?php endif; ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
         
          <!-- /.col -->
          </section>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    
   
  <?php
  require view_path('partials/footer');
  ?>
