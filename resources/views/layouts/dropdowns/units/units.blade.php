@if(isset($extensions))
<select name="{{$name??'unit_id'}}" 
id="{{$id??'unit_id'}}" 
class='form-control {{$classes??''}}' 
{{$required??''}}
@foreach($extensions as $key=>$extension)
{{$key}}='{{$extension}}' 
@endforeach
>
@else
<select name="{{$name??'unit_id'}}" id="{{$id??'unit_id'}}" class='form-control {{$classes??''}}' {{$required??''}}>
@endif
	<option value=""></option>
	@if(!isset($units))
		@php
			$units = App\Models\Years::all();
		@endphp
	@endif
	@foreach($units as $unit)
		@if(old('unit_id') == $unit->id)
		<option value="{{$unit->id}}" selected>{{$unit->unit}}</option>
		@elseif(isset($selected_id) && $selected_id == $unit->id)
		<option value="{{$unit->id}}" selected>{{$unit->unit}}</option>
		@else
		<option value="{{$unit->id}}" >{{$unit->unit}}</option>
		@endif
		
	@endforeach
</select>