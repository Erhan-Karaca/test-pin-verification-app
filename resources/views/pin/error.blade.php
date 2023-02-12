@extends("layout")
@section("title", "Warning")
@section("content")
        <div class="main">
            <p class="label mb-4">Warning: <b>{{$message}}</b></p>
        </div>
@endsection
