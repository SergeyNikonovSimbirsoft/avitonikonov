@props(['status'])

@if ($status)
    <div class="group-input">
        <label class="success">
            {{ $status }}
        </label>
    </div>
@endif
