<div class="nav-depart">
    <div class="depart-btn">
        <i class="ti-menu"></i>
        <span>Categories</span>
        <ul class="depart-hover">
            @foreach ($categories as $category)
                <li>
                    <a href="{{route('catalog.category', ['code' => $category->code])}}">
                        {{ $category->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
