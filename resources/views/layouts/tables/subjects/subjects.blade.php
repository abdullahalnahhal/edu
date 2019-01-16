<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>#</th>
            <th>@lang('subjects.Group')</th>
            <th>@lang('subjects.Level')</th>
            <th>@lang('subjects.Year')</th>
            <th>@lang('subjects.Term')</th>
            <th>@lang('common.Actions')</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>#</th>
            <th>@lang('subjects.Term')</th>
            <th>@lang('subjects.Level')</th>
            <th>@lang('subjects.Year')</th>
            <th>@lang('subjects.Term')</th>
            <th>@lang('common.Actions')</th>
        </tr>
    </tfoot>
    <tbody>
      	@foreach($subjects as $key => $subject)
        <tr>
            <td>{{$key +1 }}</td>
            <td>{{$subject->subject}}</td>
            <td>{{$subject->year->year}}</td>
            <td>{{$subject->level->level}}</td>
            <td>{{$subject->term->term}}</td>
            <td>
              	<a href='{{route('teachers.subjects.edit', ['id'=>$subject->id])}}' class='btn btn-addon btn-flat btn-info' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.Edit')">
              		<i class='ti-pencil-alt'></i>
               	</a>
            	<a href='{{route('teachers.subjects.delete', ['id'=>$subject->id])}}' class='btn btn-addon btn-flat btn-danger' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.Remove')">
                	<i class='ti-trash'></i>
            	</a>
                <a href='{{route('teachers.subjects.view', ['id'=>$subject->id])}}' class='btn btn-addon btn-flat btn-success' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.View')">
                	<i class='ti-eye'></i>
            	</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>