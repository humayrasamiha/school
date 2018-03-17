<!-- 
<div class="row">

          <div class="col-md-2 navigation">

             <ul class="nav nav-pills nav-stacked">

              <li>{{ HTML::link('/addnews', 'Add News', true)}}</li>

              <li>{{ HTML::link('/maintainnews', 'Maintain News', true)}}</li>

              <li>{{ HTML::link('/addnews', 'Add Notice', true)}}</li>

              <li>{{ HTML::link('', 'Maintain Notice', true)}}</li>

              <li>{{ HTML::link('', 'Add Events', true)}}</li>

              <li>{{ HTML::link('', 'Maintain Events', true)}}</li>

            </ul>

          </div>

          <div class="col-md-10">

            <table border="3px">

                <tr>

                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Number</th>
                  <!-- <th>Image</th> -->
                  <th>Action</th>

                </tr>

                <?php

                foreach($users as $user){

                  $id    = $user->id;
                  $name  = $user->name;
                  $email = $user->email;
                  $number = $user->number;

                ?>

                <tr>

                  <td><?php echo $id;?></td>
                  <td><?php echo $name;?></td>
                  <td><?php echo $email;?></td>
                  <td><?php echo $number;?></td>
                  <td>
                    <a href="<?php echo url('deletes');?>/<?php echo $id;?>">delete</a>
                    <a href="<?php echo url('edit');?>/<?php echo $id;?>">update</a>

                  </td>

                </tr>

                  <?php } ?>



              </table>

          </div>

      </div> -->