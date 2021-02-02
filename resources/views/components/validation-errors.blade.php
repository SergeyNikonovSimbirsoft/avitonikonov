@props(['errors'])

@if ($errors->any())
    <div class="group-input">
        <label class="error">
            Whoops! Something went wrong.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </label>
    </div>
@endif
