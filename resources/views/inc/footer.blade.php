@if (backpack_theme_config('show_powered_by') || config('developer_link'))
    <div class="text-muted ml-auto mr-auto">
      @if (backpack_theme_config('developer_link') && backpack_theme_config('developer_name'))
      {{ trans('backpack::base.handcrafted_by') }} <a target="_blank" rel="noopener" href="{{ backpack_theme_config('developer_link') }}">{{ backpack_theme_config('developer_name') }}</a>.
      @endif
      @if (backpack_theme_config('show_powered_by'))
      {{ trans('backpack::base.powered_by') }} <a target="_blank" rel="noopener" href="http://backpackforlaravel.com?ref=panel_footer_link">Backpack for Laravel</a>.
      @endif
    </div>
@endif