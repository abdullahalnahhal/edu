<form method="post" action="{{route('teachers.terms.update', ['id'=>$term->id])}}" autocomplete="off">
	@method('PUT')
	@csrf
	<div class="row">
		<div class="col-md-4 col-12">
			<div class="form-group">
				<label class="control-label">@lang('terms.Term name')</label>
				<input type="text" id="term" name="term" class="form-control" placeholder="@lang('terms.Term name')" value="{{old('term')??$term->term}}"  minlength="3" maxlength="50" required>
			</div>		
		</div>
		<div class="col-md-4 col-12">
			<div class="form-group">
				<label class="control-label">@lang('terms.Level')</label>
				@include('layouts.dropdowns.levels.levels',[
					'classes'=>'command',
					'selected_id'=>@old('level_id')??$term->year->level_id,
					'extensions'=> [
						'command'=>'filler',
						'fill'=>'year_id',
						'source' => route('teachers.levels.years.get', ["id"=>"%id%"]),
						'make-data' => 'options',
						'spinner' => 'levels-spinner',
						'option-value'=>'id',
						'option-text'=>'year',
					],
				])
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div class="form-group">
				<label class="control-label">@lang('terms.Year')</label>
				@include('layouts.dropdowns.years.years', [
					'selected_id'=>@old('year_id')??$term->year_id,
				])
			</div>
		</div>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-block btn-flat btn-primary btn-addon">
			<i class='ti-save'></i> @lang('common.Save')
		</button>
	</div>
</form>