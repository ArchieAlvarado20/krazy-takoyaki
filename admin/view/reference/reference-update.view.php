<?php include view_path('partials/header')?>
 <!-- Main content -->
 <div class="main-content">
    <!-- Top navbar -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="row" style="height:200px"></div>
    <section class="content-header">
      <div class="container col-md-6">
        <div class="card shadow bg-secondary" style="height: 220px;">
        
              <!-- /.card-header -->
              <div class="card-body ">
                    <center><h4 class="mt-5 text-primary">Are you sure you want to set this reference as accomplised?<br><small>It will not be available again!</small></h4></center>
                    <div class="row d-flex mt-4 text-center p-1">
                        <div class="col-sm-5"></div>
                        <form action="" method="post">
                           
                                <button class="btn btn-success" name="accomplised" onclick="alert('Successfully set as accomplished')"><i class="fa fa-thumbs-up"></i></button>

                                <a class="btn btn-primary" type="button" href="index.php?pg=reference"><i class="fa fa-times"></i></a>
                          
                        </form>
                            
                    </div>
                        
               
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
<?php include view_path('partials/footer')?>
<script>
    function accomplished(){
                        Swal.fire(
                        'Reference',
                        'Accomplished',
                        'success',
                        )
                        setTimeout(function(){window.top.location="index.php?pg=reference"} , 2000);
                    }
                

  </script>