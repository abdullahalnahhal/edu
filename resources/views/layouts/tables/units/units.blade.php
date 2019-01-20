<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>#</th>
            <th>@lang('units.Group')</th>
            <th>@lang('units.Level')</th>
            <th>@lang('units.Year')</th>
            <th>@lang('units.Term')</th>
            <th>@lang('units.Subject')</th>
            <th>@lang('common.Actions')</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>#</th>
            <th>@lang('units.Term')</th>
            <th>@lang('units.Level')</th>
            <th>@lang('units.Year')</th>
            <th>@lang('units.Term')</th>
            <th>@lang('units.Subject')</th>
            <th>@lang('common.Actions')</th>
        </tr>
    </tfoot>
    <tbody>
      	@foreach($units as $key => $unit)
        <tr>
            <td>{{$key +1 }}</td>
            <td>{{$unit->unit}}</td>
            <td>{{$unit->year->year}}</td>
            <td>{{$unit->level->level}}</td>
            <td>{{$unit->term->term}}</td>
            <td>{{$unit->subject->subject}}</td>
            <td>
              	<a href='{{route('teachers.units.edit', ['id'=>$unit->id])}}' class='btn btn-addon btn-flat btn-info' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.Edit')">
              		<i class='ti-pencil-alt'></i>
               	</a>
            	<a href='{{route('teachers.units.delete', ['id'=>$unit->id])}}' class='btn btn-addon btn-flat btn-danger' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.Remove')">
                	<i class='ti-trash'></i>
            	</a>
                <a href='{{route('teachers.units.view', ['id'=>$unit->id])}}' class='btn btn-addon btn-flat btn-success' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.View')">
                	<i class='ti-eye'></i>
            	</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>