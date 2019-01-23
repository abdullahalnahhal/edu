<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th></th>
            <th>@lang('exams.Title')</th>
            <th>@lang('exams.Level')</th>
            <th>@lang('exams.Year')</th>
            <th>@lang('exams.Term')</th>
            <th>@lang('exams.Subject')</th>
            <th>@lang('exams.Number Of Questions')</th>
            <th>@lang('common.Actions')</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th></th>
            <th>@lang('exams.Title')</th>
            <th>@lang('exams.Level')</th>
            <th>@lang('exams.Year')</th>
            <th>@lang('exams.Term')</th>
            <th>@lang('exams.Subject')</th>
            <th>@lang('exams.Number Of Questions')</th>
            <th>@lang('common.Actions')</th>
        </tr>
    </tfoot>
    <tbody>
      	@foreach($exams as $key => $exam)
        <tr>
            <td>{{$key +1 }}</td>
            <td>{{$exam->title}}</td>
            <td>{{$exam->year->level->level}}</td>
            <td>{{$exam->year->year}}</td>
            <td>{{$exam->term->term}}</td>
            <td>{{$exam->subject->subject}}</td>
            <td>{{$exam->question_number}}</td>
            <td>
              	<a href='{{route('teachers.exams.edit', ['id'=>$exam->id])}}' class='btn btn-addon btn-flat btn-info' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.Edit')">
              		<i class='ti-pencil-alt'></i>
               	</a>
            	<a href='{{route('teachers.exams.delete', ['id'=>$exam->id])}}' class='btn btn-addon btn-flat btn-danger' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.Remove')">
                	<i class='ti-trash'></i>
            	</a>
                <a href='{{route('teachers.exams.view', ['id'=>$exam->id])}}' class='btn btn-addon btn-flat btn-success' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.View')">
                	<i class='ti-eye'></i>
            	</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
