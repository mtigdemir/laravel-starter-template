@if (Session::get('notice'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    {{ Session::get('notice') }}
</div>
@endif



@if (Session::get('error'))
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    @if (is_array(Session::get('error')))
    {{ head(Session::get('error')) }}
    @else
    {{Session::get('error') }}
    @endif
</div>
@endif


@if ($errors->has())
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
</div>
@endif
<br>