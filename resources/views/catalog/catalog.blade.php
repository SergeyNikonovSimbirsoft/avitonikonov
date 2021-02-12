@extends('layouts.main')
@section('content')
    {{ Breadcrumbs::render('catalog.category') }}
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">
                        <div class="blog-detail-title">
                            <h2>Catalog</h2>
                        </div>
                    </div>
                </div>
                @if(count($categories) > 0)
                    <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                        <div class="filter-widget">
                            <h4 class="fw-title">Categories</h4>
                            <ul class="filter-catagories">
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('catalog.category', ['code' => $category->code]) }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
