<?php require view_path('partials/header');?>
<style>


</style>
<!-- Google Font: Source Sans Pro -->

  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->

<div class="content-wrapper mt-5">
  
     <!-- Main content -->
     <section class="content-header">
      <div class="container">
        <div class="card shadow bg-secondary">
              <!-- /.card-header -->
              <div class="card-body ">
                  <div class="row p-2">
                      <div class="col-sm-6 mt-1">
                        <h3 class="text-primary "><strong><i class="fa fa-hamburger"></i> Product</strong> </h3>
                      </div>
                      <div class="col-sm-6">
                          <ol class="float-sm-right">
                            <a href="index.php?pg=product-new" class="btn btn-dark text-primary float-end">New Product</a>         
                          </ol>
                      </div>
                    </div>
                
                <table id="myTable" class="table table-sm mb-0 text-center table-dark table-hover text-light">
                  <thead class="bg-light">
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Pcode</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Cost</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Display</th>
                    <th class="text-center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
             
                  <?php $no=1;if(!empty($products)):?>
                <?php foreach ($products as $product):?>
                            <tr>
                              <td class="text-center"><?= $no?></td>
                              <td><img src="<?=crop($product['image'])?>" alt="product image" style="width=50%;max-width:50px;height=100%;max-height:100px;"></td>
                              <td class="text-center"><?= $product['pcode'] ?></td>
                              <td class="text-center" ><?= $product['p_name'] ?></td>
                              <td class="text-center" style="font-weight:bolder"><?= $product['description'] ?></td>
                              <td class="text-center"><?= $product['cost'] ?></td>
                              <td class="text-center"><?= $product['price'] ?></td>
                              <td class="text-center"><?= $product['category'] == '1' ?"<span class='badge bg-success text-sm'>Posted</span>" : "<span class='badge bg-primary text-sm'>Raw-Materials</span>";?></td>
                              <td  class="text-center">
                              <a href="index.php?pg=product-edit&id=<?= $product['id'];?>" class="btn btn-sm btn-dark text-success m-0"><i class="fa fa-edit"></i> </a>
                                <a class="btn btn-sm btn-dark text-primary m-0" href="index.php?pg=product-delete&id=<?=$product['id'] ?>" ><i class="fa fa-trash"></i> </a>
                                
                              </td>
                              
                            </tr>
                            
                            <?php $no++; endforeach?>
                        <?php endif ?>
                         
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
                  <!-- /.container-fluid -->
        </section>
          <!-- /.col -->
        </div>
   
        <!-- /.row -->
      </div>
   
  
  
 
  <?php require view_path('partials/footer');?>

  