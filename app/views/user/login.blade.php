<section class="postwrapper clearfix">
    <div class="fullwidth clearfix">
        <div class="col-md-6 col-md-offset-3">
            <div class="title1">
                <h3>{{Lang::get('static.login')}}</h3>
                <hr>
                <p class="lead">Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
            </div>


            @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif

            @if(Session::has('message'))
            <div class="alert alert-danger">
                {{Session::get('message')}}
            </div>
            @endif

            {{ Form::open(array('url'=>'signin', 'class'=>'form-signin')) }}
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>Lang::get('static.username_or_email'))) }}
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="{{Lang::get('static.password')}}">
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">{{Lang::get('static.login')}}</button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</section>