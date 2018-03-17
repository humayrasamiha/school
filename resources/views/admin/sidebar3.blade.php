
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

            {!! Form::open(['url' => 'addnotice']) !!}

              <div class="form-group">

                echo "Oct 3,1975".date("l", mktime(0,0,0,10,3,1975)) . "<br>";
                
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