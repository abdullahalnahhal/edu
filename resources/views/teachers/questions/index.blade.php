@extends('layouts.body')
@section('title', 'Questions')
@section('bread-crump')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">@lang('sidebar.Questions')</h3> 
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
<!-- Start Page Content -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href='{{route('teachers.questions.new')}}' class="card-title btn btn-warning btn-addon btn-flat text-white" data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.New')">
                	<i class='ti-plus'></i> @lang('common.New')
                </a>
                <div class="table-responsive m-t-40">
	                @include('layouts.tables.questions.questions')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
    <script src="{{asset("new/js/lib/datatables/datatables.min.js")}}"></script>
    <script src="{{asset("new/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js")}}"></script>
    <script src="{{asset("new/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js")}}"></script>
    <script src="{{asset("new/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js")}}"></script>
    <script src="{{asset("new/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js")}}"></script>
    <script src="{{asset("new/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js")}}"></script>
    <script src="{{asset("new/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js")}}"></script>
    <script src="{{asset("new/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js")}}"></script>
    <script src="{{asset("new/js/lib/datatables/datatables-init.js")}}"></script>
@endpush