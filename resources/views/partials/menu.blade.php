@foreach ($items as $item)
<li class="{{ isset($item['children']) ? 'dropdown-submenu' : '' }}">
    <a href="{{ url($item['url']) }}">{{ $item['label'] }}</a>
    @if (isset($item['children']) && is_array($item['children']))
    <ul class="dropdown-menu">
        @include('partials.menu', ['items' => $item['children']])
    </ul>
    @endif
</li>
@endforeach