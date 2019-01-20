@extends('layouts.body')
@section('bread-crump')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">@lang('common.New') @lang('units.Unit')</h3> 
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
            <div class="card-title">
                <h4>{{$unit->unit }}</h4>
                <a href='{{route('teachers.units.delete', ['id'=>$unit->id])}}' class='btn btn-addon btn-flat btn-danger pull-right ml-1' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.Remove')">
                    <i class='ti-trash'></i>
                </a>
                <a href='{{route('teachers.units.edit', ['id'=>$unit->id])}}' class='btn btn-addon btn-flat btn-info pull-right' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.Edit')">
                    <i class='ti-pencil-alt'></i>
                </a>
            </div>
            <div class="card-body">
            	<div class="row text-center">
                    <div class="col-6 bg-secondary text-white">
                        @lang('units.Level')
                    </div>
                    <div class="col-6 text-black">
                        {{$unit->level->level }}
                    </div>
                    <div class="col-6 bg-secondary text-white">
                        @lang('units.Year')
                    </div>
                    <div class="col-6 text-black">
                        {{$unit->year->year }}
                    </div>
                    <div class="col-6 bg-secondary text-white">
                        @lang('units.Term')
                    </div>
                    <div class="col-6 text-black">
                        {{$unit->term->term }}
                    </div>
                    <div class="col-6 bg-secondary text-white">
                        @lang('units.Subject')
                    </div>
                    <div class="col-6 text-black">
                        {{$unit->subject->subject }}
                    </div>
                </div>                    
            </div>
        </div>
    </div>
</div>
@endsection