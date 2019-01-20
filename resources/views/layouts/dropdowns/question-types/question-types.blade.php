@if(isset($extensions))
<select name="{{$name??'type_id'}}" 
id="{{$id??'type_id'}}" 
class='form-control {{$classes??''}}' 
{{$required??''}}
@foreach($extensions as $key=>$extension)
{{$key}}='{{$extension}}' 
@endforeach
>
@else
<select name="{{$name??'type_id'}}" id="{{$id??'type_id'}}" class='form-control {{$classes??''}}' {{$required??''}}>
@endif
	<option value=""></option>
	@if(!isset($types))
		@php
			$types = App\Models\QuestionTypes::all();
		@endphp
	@endif
	@foreach($types as $type)
		@if(old('type_id') == $type->id)
		<option value="{{$type->id}}" selected>{{$type}}</option>
		@elseif(isset($selected_id) && $selected_id == $type->id)
		<option value="{{$type->id}}" selected>{{$type->type}}</option>
		@else
		<option value="{{$type->id}}" >{{$type->type}}</option>
		@endif
		
	@endforeach
</select>