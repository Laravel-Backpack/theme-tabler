@php
    // defaults; backwards compatibility with Backpack 4.0 widgets
    $widget['wrapper']['class'] = $widget['wrapper']['class'] ?? $widget['wrapperClass'] ?? 'col-sm-6 col-lg-3';
    $accentColor = $widget['accentColor'] ?? 'primary';
@endphp

@includeWhen(!empty($widget['wrapper']), backpack_view('widgets.inc.wrapper_start'))
<div class="{{ $widget['class'] ?? 'card' }} @if($widget['ribbon'] ?? false) border-start-0 @endif">

    @if ($widget['ribbon'] ?? false)
        <div class="ribbon ribbon-{{ $widget['ribbon'][0] ?? 'top' }} bg-{{ $accentColor }} @if(($widget['ribbon'][0] ?? '') === 'bottom') mb-3 @endif">
            <i class="la {{ $widget['ribbon'][1] ?? '' }} fs-3"></i>
        </div>
    @endif

    @if ($widget['statusBorder'] ?? false)
        <div class="card-status-{{ $widget['statusBorder'] }} bg-{{ $accentColor }}"></div>
    @endif

    <div class="card-body">
        @if (isset($widget['description']))
            <div class="subheader @if(($widget['ribbon'][0] ?? '') === 'bottom') pe-3 @endif">{!! $widget['description'] !!}</div>
        @endif

        @if (isset($widget['value']))
            <div class="h1 mb-3 @if(($widget['ribbon'][0] ?? '') === 'bottom') pe-3 @endif">{!! $widget['value'] !!}</div>
        @endif

        @if (isset($widget['hint']))
            <div class="d-flex mb-2">
                <div class="card-text @if(($widget['ribbon'][0] ?? '') === 'bottom') pe-3 @endif">{!! $widget['hint'] !!}</div>
            </div>
        @endif

        @if (isset($widget['progress']))
            <div class="progress progress-sm">
                <div class="{{ $widget['progressClass'] ?? 'progress-bar' }} bg-{{$accentColor}}" style="width: {{ $widget['progress']  }}%" role="progressbar" aria-valuenow="{{ $widget['progress']  }}" aria-valuemin="0" aria-valuemax="100" aria-label="{{ $widget['progress']  }}% Complete">
                    <span class="visually-hidden">{{ $widget['progress']  }}% Complete</span>
                </div>
            </div>
        @endif

    </div>

    @if (isset($widget['footer_link']))
        <div class="card-footer px-3 py-2">
            <a class="btn-block card-text d-flex justify-content-between align-items-center" href="{{ $widget['footer_link'] ?? '#' }}"><span class="small font-weight-bold">{{ $widget['footer_text'] ?? 'View more' }}</span><i class="la la-angle-right"></i></a>
        </div>
    @endif
  </div>
@includeWhen(!empty($widget['wrapper']), backpack_view('widgets.inc.wrapper_end'))
