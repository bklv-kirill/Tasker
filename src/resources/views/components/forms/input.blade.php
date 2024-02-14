<div class="mb-3">
    <label for="{{ $attributes["for"] }}" class="form-label">{{ $label }}</label>
    <input name="{{ $attributes["name"]}}" type="{{ $attributes["type"] }}" value="{{ $attributes["value"] }}" class="form-control" id="{{ $attributes["for"] }}">

    {{ $slot }}
</div>