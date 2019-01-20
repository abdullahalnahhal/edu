@if(isset($extensions))
<select name="{{$name??'subject_id'}}" 
id="{{$id??'subject_id'}}" 
class='form-control {{$classes??''}}' 
{{$required??''}}
@foreach($extensions as $key=>$extension)
{{$key}}='{{$extension}}' 
@endforeach
>
@else
<select name="{{$name??'subject_id'}}" id="{{$id??'subject_id'}}" class='form-control {{$classes??''}}' {{$required??''}}>
@endif
	<option value=""></option>
	@if(!isset($subjects))
		@php
			$subjects = App\Models\Subjects::all();
		@endphp
	@endif
	@foreach($subjects as $subject)
		@if(old('subject_id') == $subject->id)
		<option value="{{$subject->id}}" selected>{{$subject->subject}}</option>
		@elseif(isset($selected_id) && $selected_id == $subject->id)
		<option value="{{$subject->id}}" selected>{{$subject->subject}}</option>
		@else
		<option value="{{$subject->id}}" >{{$subject->subject}}</option>
		@endif
		
	@endforeach
</select>