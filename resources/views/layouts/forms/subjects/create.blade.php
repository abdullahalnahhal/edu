<form method="post" action="{{route('teachers.subjects.create')}}" autocomplete="off">
	@csrf
	<div class="row">
		<div class="col-md-6 col-12">
			<div class="form-group">
				<label class="control-label">@lang('subjects.Subject name')</label>
				<input type="text" id="subject" name="subject" class="form-control" placeholder="@lang('subjects.Subject name')" value="{{old('subject')}}"  minlength="3" maxlength="50" required>
			</div>		
		</div>
		<div class="col-md-6 col-12">
			<div class="form-group">
				<label class="control-label">@lang('subjects.Level')</label>
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
	</div>
	<div class="row">
		<div class="col-md-6 col-12">
			<div class="form-group">
				<label class="control-label">@lang('subjects.Year')</label>
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
		<div class="col-md-6 col-12">
			<div class="form-group">
				<label class="control-label">@lang('subjects.Term')</label>
				@include('layouts.dropdowns.terms.terms', [
					'extensions'=>[
						'disabled'=>'true',
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