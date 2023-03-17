@includeWhen(!empty($widget['wrapper']), 'backpack::widgets.inc.wrapper_start')

<div class="{{ $widget['class'] ?? 'alert alert-primary' }}" role="alert">

	@if (isset($widget['close_button']) && $widget['close_button'])	
	<button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	@endif

	@if (isset($widget['heading']))
	<h4 class="alert-heading">{!! $widget['heading'] !!}</h4>
	@endif

	@if (isset($widget['content']))
	<p>{!! $widget['content'] !!}</p>
	@endif

</div>

@includeWhen(!empty($widget['wrapper']), 'backpack::widgets.inc.wrapper_end')