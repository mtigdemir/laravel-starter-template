@include('layouts.header')
@include('layouts.navigation')

<section class="post-wrapper-top dm-shadow clearfix">
    <div class="container">
        <div class="col-lg-12">
            <h2>{{Lang::get('static.page_not_found')}}</h2>
        </div>
    </div>
</section>
<section class="postwrapper clearfix">
    <div class="container">
        <div class="row">
            <div class="fullwidth clearfix">
                <div class="col-lg-12">

                    <div class="error404 text-center">
                        <h2>
                            <span>404</span>
                        </h2>
                        <h3>{{Lang::get('static.404_content')}}</h3>
                        <a class="btn btn-primary" href="{{URL::to('/')}}">{{Lang::get('static.return_home')}}</a>
                    </div><br><br><br>

                </div><!-- end col-lg-12 -->
            </div><!-- end fullwidth -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

@include('layouts.footer')