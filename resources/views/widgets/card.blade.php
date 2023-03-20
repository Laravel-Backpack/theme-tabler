@php
    // defaults; backwards compatibility with Backpack 4.0 widgets
    $widget['wrapper']['class'] = $widget['wrapper']['class'] ?? $widget['wrapperClass'] ?? 'col-sm-6 col-lg-4';
    $accentColor = $widget['accentColor'] ?? 'primary';
@endphp

@includeWhen(!empty($widget['wrapper']), backpack_view('widgets.inc.wrapper_start'))
<div class="{{ $widget['class'] ?? 'card' }}">

    @if ($widget['ribbon'] ?? false)
        <div class="ribbon ribbon-{{ $widget['ribbon'][0] ?? 'top' }} bg-{{ $accentColor }} @if(($widget['ribbon'][0] ?? '') === 'bottom') mb-4 @endif">
            <i class="la {{ $widget['ribbon'][1] ?? '' }} fs-3"></i>
        </div>
    @endif

    @if ($widget['statusBorder'] ?? false)
        <div class="card-status-{{ $widget['statusBorder'] }} bg-{{ $accentColor }}"></div>
    @endif

    <div class="card-body">
        @if (isset($widget['content']['header']))
            <div class="card-title @if(($widget['ribbon'][0] ?? '') === 'bottom') pe-3 @endif">{!! $widget['content']['header'] !!}</div>
        @endif

        @if (isset($widget['content']['body']))
            <div class="@if(($widget['ribbon'][0] ?? '') === 'bottom') pe-3 @endif">{!! $widget['content']['body'] !!}</div>
        @endif

    </div>

    @if (isset($widget['content']['link']))
        <div class="card-footer px-3 py-2">
            <a class="btn-block card-text d-flex justify-content-between align-items-center" href="{{ $widget['content']['link']['href'] ?? '#' }}">
                <span class="small font-weight-bold text-{{ $accentColor }}">{{ $widget['content']['link']['labelText'] ?? 'View more' }}</span><i class="la la-angle-right text-{{ $accentColor }}"></i></a>
        </div>
    @endif
</div>
@includeWhen(!empty($widget['wrapper']), backpack_view('widgets.inc.wrapper_end'))
