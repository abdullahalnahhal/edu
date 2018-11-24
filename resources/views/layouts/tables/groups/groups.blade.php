<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>#</th>
            <th>@lang('groups.Group')</th>
            <th>@lang('groups.Level')</th>
            <th>@lang('groups.Year')</th>
            <th>@lang('groups.Term')</th>
            <th>@lang('common.Actions')</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>#</th>
            <th>@lang('groups.Term')</th>
            <th>@lang('groups.Level')</th>
            <th>@lang('groups.Year')</th>
            <th>@lang('groups.Term')</th>
            <th>@lang('common.Actions')</th>
        </tr>
    </tfoot>
    <tbody>
      	@foreach($groups as $key => $group)
        <tr>
            <td>{{$key +1 }}</td>
            <td>{{$group->group}}</td>
            <td>{{$group->year->year}}</td>
            <td>{{$group->level->level}}</td>
            <td>{{$group->term->term}}</td>
            <td>
              	<a href='{{route('teachers.groups.edit', ['id'=>$group->id])}}' class='btn btn-addon btn-flat btn-info' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.Edit')">
              		<i class='ti-pencil-alt'></i>
               	</a>
            	<a href='{{route('teachers.groups.delete', ['id'=>$group->id])}}' class='btn btn-addon btn-flat btn-danger' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.Remove')">
                	<i class='ti-trash'></i>
            	</a>
                <a href='{{route('teachers.groups.view', ['id'=>$group->id])}}' class='btn btn-addon btn-flat btn-success' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.View')">
                	<i class='ti-eye'></i>
            	</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>