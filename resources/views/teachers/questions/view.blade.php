@extends('layouts.body')
@section('title', 'Question')
@section('bread-crump')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">@lang('sidebar.Questions')</h3>
    </div>
  	<div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">@lang('sidebar.Dashboard')</a></li>
            <li class="breadcrumb-item active">@lang('sidebar.Questions')</li>
        </ol>
    </div>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-title">
                <h4>{{$question->title }}</h4>
                <a href='{{route('teachers.questions.delete', ['id'=>$question->id])}}' class='btn btn-addon btn-flat btn-danger pull-right ml-1' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.Remove')">
                    <i class='ti-trash'></i>
                </a>
                <a href='{{route('teachers.questions.edit', ['id'=>$question->id])}}' class='btn btn-addon btn-flat btn-info pull-right' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.Edit')">
                    <i class='ti-pencil-alt'></i>
                </a>
            </div>
            <div class="card-title">
                <div class="row">
                    <div class="col-3 bg-secondary text-white">
                        @lang('questions.Level')
                    </div>
                    <div class="col-3 text-black">
                      {{$question->level->level}}
                    </div>
                    <div class="col-3 bg-secondary text-white">
                        @lang('questions.Year')
                    </div>
                    <div class="col-3 text-black">
                      {{$question->year->year}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 bg-secondary text-white">
                        @lang('questions.Term')
                    </div>
                    <div class="col-3 text-black">
                      {{$question->term->term}}
                    </div>
                    <div class="col-3 bg-secondary text-white">
                        @lang('questions.Subject')
                    </div>
                    <div class="col-3 text-black">
                      {{$question->subject->subject}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 bg-secondary text-white">
                        @lang('questions.Unit')
                    </div>
                    <div class="col-3 text-black">
                      {{$question->unit->unit}}
                    </div>
                    <div class="col-3 bg-secondary text-white">
                        @lang('questions.Type')
                    </div>
                    <div class="col-3 text-black">
                      {{$question->type->type}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 bg-secondary text-white">
                        @lang('questions.Duration')
                    </div>
                    <div class="col-3 text-black">
                      {{$question->duration}}
                    </div>
                    <div class="col-3 bg-secondary text-white">
                        @lang('questions.Points')
                    </div>
                    <div class="col-3 text-black">
                      {{$question->duration}}
                    </div>
                </div>
            </div>
            <div class="card-body">
              @foreach($question->answers as $answer )
            	<div class="row">
                    <div class="col-6 bg-secondary text-white">
                        {{$answer->answer }}
                    </div>
                    <div class="col-6 text-black">
                        @if($answer->is_correct)
                        Correct
                        @else
                        False
                        @endif
                    </div>
              </div>
              @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
