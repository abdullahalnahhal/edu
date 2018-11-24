<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th></th>
            <th>@lang('levels.level')</th>
            <th>@lang('common.Actions')</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th></th>
            <th>@lang('levels.level')</th>
            <th>@lang('common.Actions')</th>
        </tr>
    </tfoot>
    <tbody>
      	@foreach($levels as $key => $level)
        <tr>
            <td>{{$key +1 }}</td>
            <td>{{$level->level}}</td>
            <td>{{$level->years}}</td>
            <td>
              	<a href='{{route('teachers.levels.edit', ['id'=>$level->id])}}' class='btn btn-addon btn-flat btn-info' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.Edit')">
              		<i class='ti-pencil-alt'></i>
               	</a>
            	<a href='{{route('teachers.levels.delete', ['id'=>$level->id])}}' class='btn btn-addon btn-flat btn-danger' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.Remove')">
                	<i class='ti-trash'></i>
            	</a>
                <a href='{{route('teachers.levels.view', ['id'=>$level->id])}}' class='btn btn-addon btn-flat btn-success' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.View')">
                	<i class='ti-eye'></i>
            	</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>