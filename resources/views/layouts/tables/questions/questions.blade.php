<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th></th>
            <th>@lang('questions.Question')</th>
            <th>@lang('questions.Duration')</th>
            <th>@lang('questions.Points')</th>
            <th>@lang('questions.Type')</th>
            <th>@lang('common.Actions')</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th></th>
            <th>@lang('questions.Question')</th>
            <th>@lang('questions.Duration')</th>
            <th>@lang('questions.Points')</th>
            <th>@lang('questions.Type')</th>
            <th>@lang('common.Actions')</th>
        </tr>
    </tfoot>
    <tbody>
      	@foreach($questions as $key => $question)
        <tr>
            <td>{{$key +1 }}</td>
            <td>{{$question->title}}</td>
            <td>{{$question->duration}}</td>
            <td>{{$question->points}}</td>
            <td>{{$question->type->type}}</td>
            <td>
              	<a href='{{route('teachers.questions.edit', ['id'=>$question->id])}}' class='btn btn-addon btn-flat btn-info' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.Edit')">
              		<i class='ti-pencil-alt'></i>
               	</a>
            	<a href='{{route('teachers.questions.delete', ['id'=>$question->id])}}' class='btn btn-addon btn-flat btn-danger' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.Remove')">
                	<i class='ti-trash'></i>
            	</a>
                <a href='{{route('teachers.questions.view', ['id'=>$question->id])}}' class='btn btn-addon btn-flat btn-success' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.View')">
                	<i class='ti-eye'></i>
            	</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>