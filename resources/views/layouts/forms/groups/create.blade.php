<form method="post" action="{{route('teachers.groups.create')}}" autocomplete="off">
	@csrf
	<div class="row">
		<div class="col-md-6 col-12">
			<div class="form-group">
				<label class="control-label">@lang('groups.Group name')</label>
				<input type="text" id="group" name="group" class="form-control" placeholder="@lang('groups.Group name')" value="{{old('group')}}"  minlength="3" maxlength="50" required>
			</div>		
		</div>
		<div class="col-md-6 col-12">
			<div class="form-group">
				<label class="control-label">@lang('groups.Level')</label>
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
				<label class="control-label">@lang('groups.Year')</label>
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
				<label class="control-label">@lang('groups.Term')</label>
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