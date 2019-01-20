<form method="post" action="{{route('teachers.units.update', ['id'=>$unit->id])}}" autocomplete="off">
	@method('PUT')
	@csrf
	<div class="row">
		<div class="col-md-4 col-12">
			<div class="form-group">
				<label class="control-label">@lang('units.Unit Name')</label>
				<input type="text" id="unit" name="unit" class="form-control" placeholder="@lang('units.Unit Name')" value="{{old('unit')??$unit->unit}}"  minlength="3" maxlength="50" required>
			</div>		
		</div>
		<div class="col-md-4 col-12">
			<div class="form-group">
				<label class="control-label">@lang('units.Level')</label>
				@include('layouts.dropdowns.levels.levels',[
					'classes'=>'command',
					'selected_id'=>@old('level_id')??$unit->level_id,
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
				<label class="control-label">@lang('units.Year')</label>
				@include('layouts.dropdowns.years.years',[
					'classes'=>'command',
					'selected_id'=>@old('year_id')??$unit->year_id,
					'extensions'=> [
						'command'=>'filler',
						'fill'=>'term_id',
						'source' => route('teachers.years.terms.get', ["id"=>"%id%"]),
						'make-data' => 'options',
						'spinner' => 'years-spinner',
						'option-value'=>'id',
						'option-text'=>'term',
					],
				])
			</div>
		</div>
	</div>
	<div class="row">		
		<div class="col-md-4 col-12">
			<div class="form-group">
				<label class="control-label">@lang('units.Term')</label>
				@include('layouts.dropdowns.terms.terms', [
					'classes'=>'command',
					'selected_id'=>@old('term_id')??$unit->term_id,
					'extensions'=> [
						'command'=>'filler',
						'fill'=>'subject_id',
						'source' => route('teachers.terms.subjects.get', ["id"=>"%id%"]),
						'make-data' => 'options',
						'spinner' => 'years-spinner',
						'option-value'=>'id',
						'option-text'=>'subject',
					],

				])
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div class="form-group">
				<label class="control-label">@lang('units.Subject')</label>
				@include('layouts.dropdowns.subjects.subjects', [
					'selected_id'=>@old('subject_id')??$unit->subject_id,
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