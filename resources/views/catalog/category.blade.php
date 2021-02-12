@extends('layouts.main')
@section('content')
    {{ Breadcrumbs::render('catalog.category' , $category) }}
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">
                        <div class="blog-detail-title">
                            <h2>{{ $category->name }}</h2>
                        </div>
                    </div>
                </div>
                @if(count($category->subcategory) > 0)
                    <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                        <div class="filter-widget">
                            <h4 class="fw-title">Subcategories</h4>
                            <ul class="filter-catagories">
                                @foreach($category->subcategory as $cat)
                                    <li>
                                        <a href="{{ route('catalog.category', ['code' => $cat->code]) }}">{{ $cat->name }}</a>
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
