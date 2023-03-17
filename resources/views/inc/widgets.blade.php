@if (!empty($widgets))
	@foreach ($widgets as $currentWidget)

		@if (is_array($currentWidget))
			@php
				$currentWidget = \Backpack\CRUD\app\Library\Widget::add($currentWidget);
			@endphp
		@endif

		@include($currentWidget->getFinalViewPath(), ['widget' => $currentWidget->toArray()])

	@endforeach
@endif
