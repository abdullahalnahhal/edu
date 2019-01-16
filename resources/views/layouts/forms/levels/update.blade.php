<form method="post" action="{{route('teachers.levels.update', ['id'=>$level->id])}}" autocomplete="off">
	@method('PUT')
	@csrf
	<div class="form-group">
		<label class="control-label">@lang('levels.Level name')</label>
		<input type="text" id="level" name='level' class="form-control" placeholder="@lang('levels.Level name')" value="{{$level->level}}">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-block btn-flat btn-primary btn-addon">
			<i class='ti-save'></i> @lang('common.Save')
		</button>
	</div>
</form>