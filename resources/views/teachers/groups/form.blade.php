@extends('layouts.body')
@section('bread-crump')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        @if($action == 'new')
            <h3 class="text-primary">@lang('common.New') @lang('groups.Groups')</h3> 
        @else
            <h3 class="text-primary">@lang('common.Edit') @lang('groups.Group')</h3> 
        @endif
        
    </div>
  	<div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">@lang('sidebar.Dashboard')</a></li>
            <li class="breadcrumb-item active">@lang('sidebar.Groups')</li>
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
            		@include('layouts.forms.groups.create')
            	@else
            		@include('layouts.forms.groups.update')
            	@endif
            </div>
        </div>
    </div>
</div>
@endsection