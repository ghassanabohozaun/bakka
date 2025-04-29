<section class="sub-footer p-3 bg-light text-center fs-14">
    @if (Lang() == 'ar')
        . {!! date('Y') !!} {!! trans('site.copy_right') !!}
        <a href="{!! route('index') !!}">{!! trans('site.home') !!}</a>
        ©
    @else
        {!! trans('site.copy_right') !!} © {!! date('Y') !!}
        <a href="{!! route('index') !!}">{!! trans('site.home') !!}</a>
        - {!! trans('site.copy_right') !!} .
    @endif
</section>
