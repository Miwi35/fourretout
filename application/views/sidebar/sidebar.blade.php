@if(isset($modules) && count($modules) >0)
	<div class="well" style="padding:8px 0">
		<ul class="nav nav-list">
			@foreach($modules as $index => $module)
				{{ $module }}
				@if($index+1 < count($modules))
					<li class="divider"></li>
				@endif
			@endforeach
		</ul>
	</div>
@endif