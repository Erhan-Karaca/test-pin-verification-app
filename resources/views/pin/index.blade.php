@extends("layout")
@section("title", "Pin Validation Form")
@section("content")
    <form class="pin-form" action="{{route('pin.verification')}}" method="post">
        {{ csrf_field() }}
        <div class="main">
            <p class="label mb-4">Enter code: <b>{{$pin}}</b></p>
            <!-- SMS Code input -->
            <div class="fieldset">
                @for($i=0; $i<$pinLength; $i++)
                    <label class="box"><input class="field" type="text" placeholder="•" /></label>
                @endfor
            </div>
            <!-- End SMS Code input -->
        </div>
        <div class="animation-controls mt-4">
            <div class="animation-controls__content">
                <div class="form-check form-switch">
                    <input class="form-check-input secret-toggle" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Secret Mode</label>
                </div>
            </div>
        </div>
    </form>
@endsection
