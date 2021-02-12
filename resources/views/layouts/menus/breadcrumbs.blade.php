@if (count($breadcrumbs))
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        @foreach ($breadcrumbs as $breadcrumb)

                            @if ($breadcrumb->url && !$loop->last)
                                <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                            @else
                                <span>{{ $breadcrumb->title }}</span>
                            @endif

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
