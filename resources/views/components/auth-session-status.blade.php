@props(['status'])
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
        {{ $status }}
    </div>
@endif
