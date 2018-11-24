@if(isset($extensions))
<select name="{{$name??'term_id'}}" 
id="{{$id??'term_id'}}" 
class='form-control {{$classes??''}}' 
{{$required??''}}
@foreach($extensions as $key=>$extension)
{{$key}}='{{$extension}}' 
@endforeach
>
@else
<select name="{{$name??'term_id'}}" id="{{$id??'term_id'}}" class='form-control {{$classes??''}}' {{$required??''}}>
@endif
	<option value=""></option>
	@if(!isset($terms))
		@php
			$terms = App\Models\Terms::all();
		@endphp
	@endif
	@foreach($terms as $term)
		@if(old('term_id') == $term->id)
		<option value="{{$term->id}}" selected>{{$term->term}}</option>
		@elseif(isset($selected_id) && $selected_id == $term->id)
		<option value="{{$term->id}}" selected>{{$term->term}}</option>
		@else
		<option value="{{$term->id}}" >{{$term->term}}</option>
		@endif
		
	@endforeach
</select>