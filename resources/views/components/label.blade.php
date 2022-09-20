@props(['value'])
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
