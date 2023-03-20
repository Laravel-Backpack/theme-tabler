@if (config('backpack.base.show_powered_by') || config('backpack.base.developer_link'))
    <div class="m-auto ml-auto mr-auto text-muted p-2" style="width: fit-content">
      @if (config('backpack.base.developer_link') && config('backpack.base.developer_name'))
      {{ trans('backpack::base.handcrafted_by') }} <a target="_blank" rel="noopener" href="{{ config('backpack.base.developer_link') }}">{{ config('backpack.base.developer_name') }}</a>.
      @endif
      @if (config('backpack.base.show_powered_by'))
      {{ trans('backpack::base.powered_by') }} <a target="_blank" rel="noopener" href="http://backpackforlaravel.com?ref=panel_footer_link">Backpack for Laravel</a>.
      @endif
    </div>
@endif