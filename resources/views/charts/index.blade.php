@extends('layouts.master')
@section('content')

@section('title','customer view')
@section('header')


{{$data}}
<div style="width: 50%">
    {!! $chart->container()!!}
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    {!! $chart->script() !!}

@endsection