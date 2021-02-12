<nav class="nav-menu mobile-menu">
    <ul>
        <li @if(request()->routeIs('main'))class="active"@endif>
            <a href="{{route('main')}}">Home</a>
        </li>
        <li @if(request()->routeIs('catalog.catalog'))class="active"@endif>
            <a href="{{route('catalog.catalog')}}">Catalog</a>
        </li>
    </ul>
</nav>
<div id="mobile-menu-wrap"></div>
