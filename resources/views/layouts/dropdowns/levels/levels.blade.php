@if(isset($extensions))
<select name="{{$name??'level_id'}}" 
id="{{$id??'level_id'}}" 
class='form-control {{$classes??''}}' 
{{$required??''}}
@foreach($extensions as $key=>$extension)
{{$key}}='{{$extension}}' 
@endforeach
>
@else
<select name="{{$name??'level_id'}}" id="{{$id??'level_id'}}" class='form-control {{$classes}}' {{$required??''}}>
@endif
	<option value=""></option>
	@if(!isset($levels))
		@php
			$levels = App\Models\Levels::all();
		@endphp
	@endif
	@foreach($levels as $level)
		@if(old('level_id') == $level->id)
		<option value="{{$level->id}}" selected>{{$level->level}}</option>
		@elseif(isset($selected_id) && $selected_id == $level->id)
		<option value="{{$level->id}}" selected>{{$level->level}}</option>
		@else
		<option value="{{$level->id}}" >{{$level->level}}</option>
		@endif
		
	@endforeach
</select>