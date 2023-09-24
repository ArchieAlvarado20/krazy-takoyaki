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
              <h3 class="fw-bold text-center text-primary"><strong><i class="fa fa-hamburger"></i> Edit Raw Items</strong></h1>
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
                <div class="mb-3 cost" <?= $row['category'] == 1 ? 'style="display:none"' : ''?>>
                  <label for="">Cost</label>
                  <input type="number" name="cost" id="cost" class="form-control bg-dark" autocomplete="off" value="<?=set_value('cost',$row['cost'])?>">
                  <?php if(!empty($error['cost'])):?><small class="text-danger"><?=$error['cost']?></small><?php endif; ?>
                </div>

                <div class="mb-3 re-order" <?= $row['category'] == 1 ? 'style="display:none"' : ''?>>
                  <label for="">Re-order Level</label>
                  <input type="number" name="re_order" id="re_order" class="form-control bg-dark" autocomplete="off" value="<?=set_value('re_order',$row['re_order'])?>">
                  <?php if(!empty($error['re_order'])):?><small class="text-danger"><?=$error['re_order']?></small><?php endif; ?>
                
                </div>
                <div class="mb-3 row">
                    <div class="col-10">
                       <label for="formFile" class="form-label fw-bold">Product Image</label>
                            <input  value="<?=set_value('image',$row['image'])?>" type="file" name="image" class="form-control bg-dark <?=!empty($error['image']) ? 'border-danger' : '' ;?>" placeholder="No file selected."  aria-label="Username" aria-describedby="basic-addon1">
                             <?php if(!empty($error['image'])):?><small class="text-danger"><?=$error['image']?></small><?php endif; ?>
                    </div>
                    <div class="col-2">
                        <center><img src="<?=$row['image']?>" alt="" class="mx-auto mb-3 mt-3" style="width:100%;max-width:100px;height:100%;max-height:100px;"></center>
                    </div>
                    <div class="col-2 text-center  mt-3" style="display: none;">
                      <label for="">Post/Raw</label>
                          <br/>
                          <input type="radio" class="form-check-input text-primary ms-0 post" name="category" value="1" style="width:20px;height:20px" <?=set_value('category', $row['category'] == 1 ? 'checked' : '');?>>
                          <input type="radio" class="form-check-input text-primary ms-2 raw" name="category" value="0" style="width:20px;height:20px" <?=set_value('category', $row['category'] == 0 ? 'checked' : '');?>>
                      </div>
                    
                  </div>

                <div class="row-sm-12 d-flex">
                  <div class="col-sm-6">
                     <a href="index.php?pg=raw-stocks"><button type="button" class="btn btn-dark  text-primary px-5">
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
            
                    <a href="index.php?pg=raw-stocks">
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
  <script>
  $(document).ready(function() {
    $(".post").click(function() {

        $("div.price").show();
        $("div.cost,div.re-order").hide();
    });
});
$(document).ready(function() {
    $(".raw").click(function() {

        $("div.price").hide();
        $("div.cost,div.re-order").show();
    });
});
</script>
  