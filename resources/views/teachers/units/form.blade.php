@extends('layouts.body')
@section('bread-crump')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        @if($action == 'new')
            <h3 class="text-primary">@lang('common.New') @lang('units.Units')</h3> 
        @else
            <h3 class="text-primary">@lang('common.Edit') @lang('units.Unit')</h3> 
        @endif
        
    </div>
  	<div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">@lang('sidebar.Dashboard')</a></li>
            <li class="breadcrumb-item active">@lang('sidebar.Units')</li>
        </ol>
    </div>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            	@if($action == 'new')
            		@include('layouts.forms.units.create')
            	@else
            		@include('layouts.forms.units.update')
            	@endif
            </div>
        </div>
    </div>
</div>
@endsection