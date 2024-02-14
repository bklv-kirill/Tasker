<form action="{{ $action }}" method="{{ in_array($method, ["GET", "POST"]) ? $method : "POST" }}" class="mt-3 {{ $attributes["class"] }}">
    @if ($method !== "GET")
        @csrf
    @endif
    @method($method)

    {{ $slot }}
</form>