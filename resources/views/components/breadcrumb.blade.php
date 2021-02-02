<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="{{ route('main') }}"><i class="fa fa-home"></i> Home</a>
                    <? if (request()->routeIs('personal.personal')): ?>
                        <span>Personal</span>
                    <? else: ?>
                        <a href="{{ route('personal.personal') }}">Personal</a>
                        <span>{{ $slot }}</span>
                    <? endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
