@extends('layouts.ui')
@section('canonical-url')
{{URL::current()}}
@endsection
@section('xcss')
<style>

</style>

@endsection

@section('content')




@include('partials.homepage.showcase')

@include('partials.homepage.popularnews')

@include('partials.homepage.articles')



@endsection


@section('xjs')

@endsection
