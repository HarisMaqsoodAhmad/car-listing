@extends('layouts.clean')

@section('childContent')
    @include('layouts.partial.header')

    @yield('content')

    @include('layouts.partial.footer')
@endsection
