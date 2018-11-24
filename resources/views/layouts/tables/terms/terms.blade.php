<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>#</th>
            <th>@lang('terms.Term')</th>
            <th>@lang('terms.Year')</th>
            <th>@lang('terms.Level')</th>
            <th>@lang('common.Actions')</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>#</th>
            <th>@lang('terms.Term')</th>
            <th>@lang('terms.Year')</th>
            <th>@lang('terms.Level')</th>
            <th>@lang('common.Actions')</th>
        </tr>
    </tfoot>
    <tbody>
      	@foreach($terms as $key => $term)
        <tr>
            <td>{{$key +1 }}</td>
            <td>{{$term->term}}</td>
            <td>{{$term->year->year}}</td>
            <td>{{$term->year->level->level}}</td>
            <td>
              	<a href='{{route('teachers.terms.edit', ['id'=>$term->id])}}' class='btn btn-addon btn-flat btn-info' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.Edit')">
              		<i class='ti-pencil-alt'></i>
               	</a>
            	<a href='{{route('teachers.terms.delete', ['id'=>$term->id])}}' class='btn btn-addon btn-flat btn-danger' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.Remove')">
                	<i class='ti-trash'></i>
            	</a>
                <a href='{{route('teachers.terms.view', ['id'=>$term->id])}}' class='btn btn-addon btn-flat btn-success' data-toggle="tooltip" data-placement="top" data-original-title="@lang('common.View')">
                	<i class='ti-eye'></i>
            	</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>