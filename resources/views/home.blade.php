@extends('layouts.app')

@section('content')
<example-component v-bind:data-dusun="{{$dusun}}" v-bind:data-jenis-lokasi="{{$jenisLokasi}}" ></example-component>
{{-- <test-njir name="example" --}}
@endsection
