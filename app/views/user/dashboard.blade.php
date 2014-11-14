<div class="fullwidth clearfix">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        {{Auth::user()->avatar()}}
    </div><!-- end col-lg-6 -->    
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="clearfix"></div>

        <div class="about_icons text-center">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="service-icon">
                    <div class="dm-icon-effect-1" data-effect="slide-bottom">
                        <a href="#tab3" class=""> <i class="hovicon effect-1 sub-a fa fa-user fa-2x"></i> </a>
                    </div>
                    <div class="title"><h3>{{Lang::get('static.my_profile')}}</h3></div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="service-icon">
                    <div class="dm-icon-effect-1" data-effect="slide-bottom">
                        <a href="#tab4" class=""> <i class="hovicon effect-1 sub-a glyphicon glyphicon-fire fa-2x"></i> </a>
                    </div>
                    <div class="title"><h3>{{Lang::get('static.my_skills')}}</h3></div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="service-icon">
                    <div class="dm-icon-effect-1" data-effect="slide-bottom">
                        <a href="#" class=""> <i class="hovicon effect-1 sub-a glyphicon glyphicon-usd fa-2x"></i> </a>
                    </div>
                    <div class="title"><h3>{{Lang::get('static.my_projects')}}</h3></div>
                </div>
            </div>
        </div><!-- about_icons -->
    </div><!-- end col-lg-6 -->
</div><!-- end fullwidth -->
@if(!$errors->isEmpty())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach   
</div>
@endif


@if(Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif
@include('user.sub.skills')
@include('user.sub.profile')