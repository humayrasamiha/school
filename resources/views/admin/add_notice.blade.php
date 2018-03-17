@include('admin.header')
            


<div class="row">

          <div class="col-md-2 navigation ">

            @include('admin.sidebar') 

          </div>

          <div class="col-md-10">

          
             {!! Form::open(['url' => 'addNotice']) !!}

              <div class="form-group">
                
                <?php

                echo $date=date('j,F,Y');?>
                
                <!-- {{ Form::label('news','News Title')}}<br>

                {{ Form::text('title')}} -->

              </div>

              <div class="form-group">
                
                 {{ Form::label('noticetitle','Notice Title')}}<br>

                  {{ Form::text('noticetitle')}}
              </div>

              <div class="form-group">
                
                 {{ Form::label('noticedescription','Notice Description')}}<br>

                  {{ Form::text('noticedescription')}}
              </div>
              
              
              {{ Form::submit('Submit')}}

            {!! Form::close() !!}

          </div>

      </div>

    </div>

          
       

      

    




