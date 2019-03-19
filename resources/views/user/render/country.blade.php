@foreach($locations as $location)
<li>
	<div class="checkbox-btn">
		<input type="checkbox" value="{!! $location->id !!}" id="{!! $location->id !!}" name="region_id[]">
		<label for="{!! $location->id !!}">{!! $location->title !!}</label>
	</div>
</li>
@endforeach