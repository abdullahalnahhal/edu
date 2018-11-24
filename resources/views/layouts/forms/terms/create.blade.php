<form method="post" action="{{route('teachers.terms.create')}}" autocomplete="off">
	@csrf
	<div class="row">
		<div class="col-md-4 col-12">
			<div class="form-group">
				<label class="control-label">@lang('terms.Term name')</label>
				<input type="text" id="term" name="term" class="form-control" placeholder="@lang('terms.Term name')" value="{{old('term')}}"  minlength="3" maxlength="50" required>
			</div>		
		</div>
		<div class="col-md-4 col-12">
			<div class="form-group">
				<label class="control-label">@lang('terms.Level')</label>
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
		<div class="col-md-4 col-12">
			<div class="form-group">
				<label class="control-label">@lang('terms.Year')</label>
				@include('layouts.dropdowns.years.years', [
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