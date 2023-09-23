<?php require view_path('partials/header');?>
	<div class="row" style="height: 120px;">
		
	</div>
	<div class="container-fluid border col-lg-5 col-md-6 mt-5 p-5 bg-secondary" style="border-radius: 10px;">
		
		<?php if(is_array($row)):?>

			<center>
				<h3 class="text-primary"><i class="fa fa-user"></i> <?=$row['name']?></h3>
				<div><?=$row['role']?></div>
			</center>
			<br>
			<center><img class="rounded-circle" src="<?=crop($row['image'],400,$row['gender'])?>" style="width: 100%;max-width:100px;" ></center>
			

			<table class="table table-hover text-white border-dark">
				<tr>
					<td colspan="2" class="mb-3">
						
					</td>
				</tr>
				<tr>
					<td>...</td>
				</tr>
				
				<tr>
					<th>Email</th><td><?=$row['email']?></td>
				</tr>
				<tr>
					<th>Phone</th><td><?=$row['phone']?></td>
				</tr>

				<tr>
					<th>Employee Since</th><td><?=date("F j, Y", strtotime($row['created_at']))?></td>
				</tr>
				
			</table>
			<br>
			<a href="index.php?pg=user">
				<button type="button" class="btn btn-dark text-primary border-primary px-5">Back</button>
			</a>


		<?php else:?>
			<div class="alert alert-danger text-center">That user was not found!</div>

		<?php endif;?>
	</div>

<?php require view_path('partials/footer');?>
