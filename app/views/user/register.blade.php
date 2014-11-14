<section class="postwrapper clearfix">
    <div class="fullwidth clearfix">
        <div class="col-md-4 col-md-offset-4">
            <div class="title1">
                <h3>{{Lang::get('static.register_slogan')}}</h3>
                <hr>
                <p class="lead">{{Lang::get('static.register_slogan')}}</p>
            </div>                     

            @if(!$errors->isEmpty())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach   
            </div>
            @endif
            
            
            <div class="form-group col-md-offset-4">
                <div class="input-group">
                    <a href="{{URL::to('/facebookLogin')}}" class="btn  btn-info"><i class="fa fa-facebook"></i> | {{Lang::get('static.register_via_facebook')}}</a>
                </div>
            </div>

            
            {{ Form::open(array('url' => 'create')) }}
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>Lang::get('static.email'))) }}
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    {{ Form::text('username', null, array('class'=>'form-control', 'placeholder'=>Lang::get('static.username'))) }}
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="{{Lang::get('static.password')}}">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" name="re-password" class="form-control" placeholder="{{Lang::get('static.re-password')}}">
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="{{Lang::get('static.register')}}">
            </div>
            {{ Form::close() }}
        </div>
    </div>
</section>