<?php require view_path('partials/header');?>
<style>
  @import url('assets/css/brand-style.css');

  .zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
</style>
<!-- Google Font: Source Sans Pro -->

  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header mt-5">
     
      <div class="container col-md-11">
        <div class="card shadow bg-secondary">
              <!-- /.card-header -->
              <div class="card-body ">
                  <div class="row p-2">
                      <div class="col-sm-6 mt-1">
                        <h3 class="text-primary "><strong><i class="fa fa-hamburger"></i> Top-5 Best Seller</strong> </h3>
                      </div>
                    </div>
                
                 <table id="myTable" class="table table-sm mb-0 text-center table-dark table-hover text-light">
                  <thead class="bg-light">
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Orders</th>
             
                  </tr>
                  </thead>
                  <tbody>
             
                  <?php $no=1;if(!empty($sales)):?>
                <?php foreach ($sales as $sale):?>
                            <tr>
                              <td class="text-center"><?= $no?></td>
                              <td class="zoom"><a href = "<?=crop($sale['image'])?>"><img src="<?=crop($sale['image'])?>" alt="product image" style="width=50%;max-width:50px;height=100%;max-height:100px;"></a></td>
                              <td class="text-center"><?= $sale['p_name'] ?></td>
                              <td class="text-center" style="font-weight:bolder"><?= $sale['description'] ?></td>
                              <td class="text-center"><?= $sale['view'] ?></td> 
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
          <!-- /.col -->
          </section>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->

 
  <?php require view_path('partials/footer');?>

  
  