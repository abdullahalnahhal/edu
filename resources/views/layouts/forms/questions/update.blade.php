<form method="post" action="{{route('teachers.questions.update',['id'=>$question->id])}}" autocomplete="off">
	@method('PUT')
	@csrf
		<div class="row">
			<div class="col-md-6 col-12">
				<div class="form-group">
					<label class="control-label">@lang('questions.Question Title')</label>
					<input type="text" id="title" name="title" class="form-control" placeholder="@lang('questions.Question Title')" minlength="3" maxlength="200" value="{{$question->title}}" required>
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="form-group">
					<label class="control-label">@lang('questions.Question Duration')</label>
					<input type="number" id="duration" name="duration" class="form-control" placeholder="@lang('questions.Question Duration')" min="1" max="20" step=".001" value="{{$question->duration}}" required>
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="form-group">
					<label class="control-label">@lang('questions.Question Points')</label>
					<input type="number" id="points" name="points" class="form-control" placeholder="@lang('questions.Question Points')" min="1" step="1" value="{{$question->points}}" required>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-12">
				<div class="form-group">
					<label class="control-label">@lang('questions.Level')</label>
					@include('layouts.dropdowns.levels.levels',[
						'classes'=>'command',
						'selected_id' => $question->level_id,
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
					<label class="control-label">@lang('questions.Year')</label>
					@include('layouts.dropdowns.years.years', [
						'classes'=>'command',
						'selected_id' => $question->year_id,
						'years' => $question->level->years,
						'extensions'=>[
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
					<label class="control-label">@lang('questions.Terms')</label>
					@include('layouts.dropdowns.terms.terms', [
						'classes'=>'command',
						'selected_id' => $question->term_id,
						'terms' => $question->year->terms,
						'extensions'=>[
							'command'=>'filler',
							'fill'=>'subject_id',
							'source' => route('teachers.terms.subjects.get', ["id"=>"%id%"]),
							'make-data' => 'options',
							'spinner' => 'levels-spinner',
							'option-value'=>'id',
							'option-text'=>'subject',
						],
					])
				</div>		
			</div>
			<div class="col-md-6 col-12">
				<div class="form-group">
					<label class="control-label">@lang('questions.Subjects')</label>
					@include('layouts.dropdowns.subjects.subjects', [
						'classes'=>'command',
						'selected_id' => $question->subject_id,
						'subjects' => $question->term->subjects,
						'extensions'=>[
							'command'=>'filler',
							'fill'=>'unit_id',
							'source' => route('teachers.subjects.units.get', ["id"=>"%id%"]),
							'make-data' => 'options',
							'spinner' => 'levels-spinner',
							'option-value'=>'id',
							'option-text'=>'unit',
						],
					])
				</div>		
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-12">
				<div class="form-group">
					<label class="control-label">@lang('questions.Units')</label>
					@include('layouts.dropdowns.units.units', [
						'selected_id' => $question->level_id,
						'units' => $question->subject->units,
					])
				</div>		
			</div>
			<div class="col-md-6 col-12">
				<div class="form-group">
					<label class="control-label">@lang('questions.Question Type')</label>
					@include('layouts.dropdowns.question-types.question-types', [
						'selected_id' => $question->type_id,
					])
				</div>		
			</div>
		</div>
		<hr>

		<input type="hidden" id="answer-numbers" name="answer-numbers" value="0">

		<div class="row">
			<div class="col-2">
				<button type="button" class="btn btn-success btn-flat btn-addon command" command='duplicate' template='answer-form' items='answer,is-correct,remove' target='answers-target' hdn='answer-numbers' > 
					<i class="ti-plus"></i> @lang('questions.Add Answer')
				</button>	
			</div>
		</div>
		<br>
		@foreach($question->answers->toArray() as $key => $answer)
		@if($key == 0)
		<div class="row" id="answer-form">
		@else
		<div class="row" id="answer-form-{{$key}}">
		@endif
			<div class="col-8">
				<div class="form-group">
					<input type="text" id="answer-{{$key}}" name="answer-{{$key}}" class="form-control" item='answer' placeholder="@lang('questions.Answer')" minlength="3" maxlength="200" value="{{$answer['answer']}}" required>
				</div>		
			</div>
			<div class="col-2 pt-3">
				<div class="form-group text-center">
					<label class="control-label">@lang('questions.Is Correct')</label>
					@if((int) $answer['is_correct'])	
					<input type='checkbox' id="is-correct-{{$key}}" name="is-correct[]" value="{{$key}}" item='is-correct' checked>
					@else
					<input type='checkbox' id="is-correct-{{$key}}" name="is-correct[]" value="{{$key}}" item='is-correct'>
					@endif
				</div>		
			</div>
			@if($key > 0)
			<div class="col-2 pt-1">
				<div class="form-group">
					<button type="button" class="btn btn-danger btn-flat btn-addon" onclick="common.unduplicate('answer-form', '{{$key}}', 'answer-numbers')">
						<i class="ti-minus" item="remove" ></i>
					</button>
				</div>		
			</div>
			@endif
		</div>
		@endforeach
		<span id='answers-target'></span>
		<br>
		<div class="form-group">
			<button type="submit" class="btn btn-block btn-flat btn-primary btn-addon">
				<i class='ti-save'></i> @lang('common.Save')
			</button>
		</div>
</form>