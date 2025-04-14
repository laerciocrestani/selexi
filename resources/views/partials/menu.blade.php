@foreach ($items as $item)
<li class="{{ isset($item['children']) ? ($loop->first && $level === 0 ? 'dropdown' : 'dropdown-submenu') : '' }}">
    <a href="{{ url($item['url']) }}">{{ $item['label'] }}</a>
    @if (isset($item['children']) && is_array($item['children']))
    <ul class="dropdown-menu">
        @include('partials.menu', ['items' => $item['children'], 'level' => $level + 1])
    </ul>
    @endif
</li>
@endforeach