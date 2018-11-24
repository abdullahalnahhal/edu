<form method="post" action="{{route('teachers.years.create')}}" autocomplete="off">
	@csrf
	<div class="row">
		<div class="col-md-6 col-12">
			<div class="form-group">
				<label class="control-label">@lang('years.Year name')</label>
				<input type="text" id="year" name="year" class="form-control" placeholder="@lang('years.Year name')" value="{{old('year')}}"  minlength="3" maxlength="50" required>
			</div>		
		</div>
		<div class="col-md-6 col-12">
			<div class="form-group">
				<label class="control-label">@lang('years.Level')</label>
				@include('layouts.dropdowns.levels.levels')
			</div>
		</div>
	</div>
	<div class="form-group">
			<button type="submit" class="btn btn-block btn-flat btn-primary btn-addon">
				<i class='ti-save'></i> @lang('common.Save')
			</button>
		</div>
</form>