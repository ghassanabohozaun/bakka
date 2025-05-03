<section class="sub-footer p-3 bg-light text-center fs-14">
    @if (Lang() == 'ar')
        . {!! date('Y') !!} {!! __('site.copy_right') !!}
        <a href="{!! route('index') !!}">{!! __('site.home') !!}</a>
        ©
    @else
        {!! __('site.copy_right') !!} © {!! date('Y') !!}
        <a href="{!! route('index') !!}">{!! __('site.home') !!}</a>
        - {!! __('site.copy_right') !!} .
    @endif
</section>
