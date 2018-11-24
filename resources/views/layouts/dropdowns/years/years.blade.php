@if(isset($extensions))
<select name="{{$name??'year_id'}}" 
id="{{$id??'year_id'}}" 
class='form-control {{$classes??''}}' 
{{$required??''}}
@foreach($extensions as $key=>$extension)
{{$key}}='{{$extension}}' 
@endforeach
>
@else
<select name="{{$name??'year_id'}}" id="{{$id??'year_id'}}" class='form-control {{$classes??''}}' {{$required??''}}>
@endif
	<option value=""></option>
	@if(!isset($years))
		@php
			$years = App\Models\Years::all();
		@endphp
	@endif
	@foreach($years as $year)
		@if(old('year_id') == $year->id)
		<option value="{{$year->id}}" selected>{{$year->year}}</option>
		@elseif(isset($selected_id) && $selected_id == $year->id)
		<option value="{{$year->id}}" selected>{{$year->year}}</option>
		@else
		<option value="{{$year->id}}" >{{$year->year}}</option>
		@endif
		
	@endforeach
</select>