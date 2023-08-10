<div class="nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="#carousel" class="nav-item nav-link active">{{trans('front.Home')}}</a>
                    <a href="#about" class="nav-item nav-link">{{trans('front.about')}}</a>
                    <a href="#service" class="nav-item nav-link">{{trans('front.service')}}</a>
                    <a href="#price" class="nav-item nav-link">{{trans('front.price')}}</a>
                    <a href="#location" class="nav-item nav-link">{{trans('front.location')}}</a>
                    <a href="#footer" class="nav-item nav-link">{{trans('front.contact')}}</a>
                </div>
                <div class="ml-auto">
                    <a class="btn btn-custom" href="#price">{{trans('front.Home')}}</a>
                </div>

                <div class="ml-auto dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ LaravelLocalization::getCurrentLocale() }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
