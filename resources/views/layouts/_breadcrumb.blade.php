<div class="content-header row">
    <div class="content-header-left col-md-4 col-12 mb-2">
        <div class="d-flex align-items-center">
            <button id="toggle-sidebar" class="btn btn-sm bg-white text-dark mx-2">
                <i class="la la-bars"></i>
            </button>
        </div>
    </div>
    <div class="content-header-right col-md-8 col-12">
        <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a>
                    </li>
                    <li class="breadcrumb-item text-dark active">
                        @yield('title')
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>