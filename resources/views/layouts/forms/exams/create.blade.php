<form method="post" action="{{route('teachers.exams.create')}}" autocomplete="off">
	@csrf
	<input type="hidden" id="questions-numbers" name="questions-numbers" value="0">
	<div class="row">
		<div class="col-12">
			<div class="form-group">
				<label class="control-label">@lang('exams.Exam Title')</label>
				<input type="text" id="title" name="title" class="form-control" placeholder="@lang('exams.Exam Title')" value='{{old('title')}}' maxlength="100" minlength="3">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-12">
					<div class="form-group">
							<label class="control-label">@lang('exams.Level')</label>
							@include('layouts.dropdowns.levels.levels',[
								'classes'=>'command',
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
		<div class="col-md-6 col-12">
			<div class="form-group">
				<label class="control-label">@lang('exams.Year')</label>
				@include('layouts.dropdowns.years.years',[
					'classes'=>'command',
					'extensions'=> [
						'disabled'=>'true',
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
		<div class="col-md-6 col-12">
					<div class="form-group">
							<label class="control-label">@lang('exams.Term')</label>
							@include('layouts.dropdowns.terms.terms', [
									'classes'=>'command',
									'extensions'=>[
											'disabled'=>'true',
											'command'=>'filler',
											'fill'=>'subject_id',
											'source' => route('teachers.terms.subjects.get', ["id"=>"%id%"]),
											'make-data' => 'options',
											'spinner' => 'terms-spinner',
											'option-value'=>'id',
											'option-text'=>'subject',
									],
							])
					</div>
			</div>
		<div class="col-md-6 col-12">
			<div class="form-group">
				<label class="control-label">@lang('exams.Subject')</label>
				@include('layouts.dropdowns.subjects.subjects', [
					'classes'=>'command',
					'extensions'=>[
						'disabled'=>'true',
						'command'=>'filler',
						'fill'=>'unit_id',
						'source' => route('teachers.subjects.units.get', ["id"=>"%id%"]),
						'make-data' => 'options',
						'spinner' => 'subjects-spinner',
						'option-value'=>'id',
						'option-text'=>'unit',
						'fill-type' => 'class',
					],
				])
			</div>
		</div>
	</div>
	<hr>
	<fieldset id='question'>
		<legend>Question <span item='counter'>1</span></legend>
		<div class="row">
			<div class="col-md-3 col-12">
				<div class="form-group">
					<label class="control-label">@lang('exams.Question Type')</label>
					@include('layouts.dropdowns.question-types.question-types', [
						'name'=>'question_type_id-0',
						'id'=>'question_type_id-0',
						'extensions'=>[
							'item' => 'question_type_id',
						]
					])
				</div>
			</div>
			<div class="col-md-3 col-12">
				<div class="form-group">
					<label class="control-label">@lang('exams.Unit')</label>
					@include('layouts.dropdowns.question-types.question-types', [
						'name'=>'unit-0',
						'id'=>'unit-0',
						'classes'=>'unit_id',
						'extensions'=>[
							'item' => 'unit',
							'disabled'=>'true',
						]
					])
				</div>
			</div>
			<div class="col-md-3 col-12">
				<div class="form-group">
					<label class="control-label">@lang('exams.Max Points')</label>
					<input type="number" id="max_points-0" name="max_points-0" class="form-control" placeholder="@lang('exams.Max Points')" item='max_points' step='0.5'>
				</div>
			</div>
			<div class="col-md-3 col-12">
				<div class="form-group">
					<label class="control-label">@lang('exams.Min Points')</label>
					<input type="number" id="min_points-0" name="min_points-0" class="form-control" placeholder="@lang('exams.Min Points')" item='min_points' step='0.5'>
				</div>
			</div>
		</div>

	</fieldset>
	<span id='questions-target'></span>
	<div class="form-group row">
		<div class="col-6">
			<button type="submit" class="btn btn-block btn-flat btn-primary btn-addon">
				<i class='ti-save'></i> @lang('common.Save')
			</button>
		</div>
		<div class="col-6">
			<button type="button" class="btn btn-block btn-flat btn-danger btn-addon command" command='duplicate' template='question' items='question_type_id,unit,max_points,min_points' target='questions-target' hdn='questions-numbers'>
				<i class='ti-plus'></i> @lang('common.Add Question')
			</button>
		</div>
	</div>
</form>
