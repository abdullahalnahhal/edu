@extends('layouts.body')
@section('bread-crump')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">@lang('common.New') @lang('years.Year')</h3> 
    </div>
  	<div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">@lang('sidebar.Dashboard')</a></li>
            <li class="breadcrumb-item active">@lang('sidebar.Years')</li>
        </ol>
    </div>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-title">
                <h4>{{$year->year }}</h4>
                <a href='{{route('teachers.years.delete', ['id'=>$year->id])}}' class='btn btn-addon btn-flat btn-danger pull-right ml-1' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.Remove')">
                    <i class='ti-trash'></i>
                </a>
                <a href='{{route('teachers.years.edit', ['id'=>$year->id])}}' class='btn btn-addon btn-flat btn-info pull-right' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.Edit')">
                    <i class='ti-pencil-alt'></i>
                </a>
            </div>
            <div class="card-body">
            	<div class="row">
                    <div class="col-6 bg-secondary text-white">
                        {{$year->year }}
                    </div>
                    <div class="col-6 text-black">
                        {{$year->level->level }}
                    </div>
                </div>                    
            </div>
        </div>
    </div>
</div>
@endsection