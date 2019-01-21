<form method="post" action="{{route('teachers.groups.create')}}" autocomplete="off">
	@csrf
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
									],
							])
					</div>
			</div>
	</div>
	<div class='row'>
			<div class="col-md-6 col-12">
					<div class="form-group">
							<label class="control-label">@lang('exams.Unit')</label>
							@include('layouts.dropdowns.units.units', [
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
									],
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
