<nav class="navbar navbar-expand-lg border border-right-0 border-left-0 py-0">

    <button class="navbar-toggler  w-100" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
    </button>

    <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
        <ul class="navbar-nav  d-flex align-items-center justify-content-between w-100">
            <li class="nav-item  col ">
                <a class="nav-link   " href="{!! route('index') !!}">
                    {!! __('site.index') !!}
                    <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item  col ">
                <a class="nav-link" href="{!! route('courses') !!}">
                    {!! __('site.courses') !!}
                    <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item  col ">
                <a class="nav-link" href="{!! route('articles') !!}">
                    {!! __('site.articles') !!}
                    <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item  col ">
                <a class="nav-link" href="{!! route('videos') !!}">
                    {!! __('site.videos') !!}
                    <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item  col ">
                <a class="nav-link" href="{!! route('photo.albums') !!}">
                    {!! __('site.photo_albums') !!}
                    <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item  col ">
                <a class="nav-link" href="{!! route('faq') !!}">
                    {!! __('site.faq') !!}
                    <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item col">
                <a class="nav-link" href="{!! route('index') !!}#contactUs">
                    {!! __('site.contact_us') !!}
                </a>
            </li>
        </ul>

    </div>
</nav>
