@include('admin.header')



<div class="row">

          <div class="col-md-2 navigation ">

            @include('admin.sidebar') 

          </div>

          <div class="col-md-10">

            <table border="3px" class="table table-bordered">

	<tr>

		<th>Id</th>
		<th>News Title</th>
		<th>News Description</th>
		<th>Action</th>

	</tr>

	<?php

	foreach($users as $user){

		$id    = $user->id;
		$title  = $user->title;
		$description = $user->description;
		

	?>

	<tr>

		<td><?php echo $id;?></td>
		<td><?php echo $title;?></td>
		<td><?php echo $description;?></td>
		<td>
			<a href="<?php echo url('deletes');?>/<?php echo $id;?>">delete</a>
			<a href="<?php echo url('edit');?>/<?php echo $id;?>">update</a>

		</td>

	</tr>

	  <?php } ?>
 
	



</table>
            

          </div>

      </div>

    </div>
