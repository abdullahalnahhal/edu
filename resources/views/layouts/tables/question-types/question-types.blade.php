<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>#</th>
            <th>@lang('question-types.Type')</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>#</th>
            <th>@lang('question-types.Type')</th>
        </tr>
    </tfoot>
    <tbody>
      	@foreach($question_types as $key => $type)
        <tr>
            <td>{{$key +1 }}</td>
            <td>{{$type->type}}</td>
        </tr>
        @endforeach
    </tbody>
</table>