@php
    $classes = "text-xs text-gray-700 hover:text-gray-900"
@endphp

<a {{$attributes->merge(['class' => $classes])}} >
    {{$slot}}
</a>