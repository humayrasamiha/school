<div class="col-md-10">

            {!! Form::open(['url' => 'addNew']) !!}

              <div class="form-group">
                
                {{ Form::label('news','News Title')}}<br>

                {{ Form::text('title')}}

              </div>

              <div class="form-group">
                
                 {{ Form::label('newsdescription','News Description')}}<br>

                  {{ Form::text('description')}}
              </div>
              
              
              {{ Form::submit('Submit')}}

            {!! Form::close() !!}

          </div>

      </div>