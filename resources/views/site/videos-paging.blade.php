<div class="row justify-content-center" uk-lightbox>
    @foreach ($videos as $video)
        <div class="col-lg-4 col-md-6  mb-4">
            <div class="item-course">
                <div class="video-with-icon">
                    <div class="uk-background-cover uk-height-medium uk-panel  uk-flex uk-flex-center uk-flex-middle br-5"
                        @if ($video->photo) style="background-image: url({!! asset('adminBoard/uploadedImages/videos/' . $video->photo) !!});
                            height: 220px;"
                        @else
                        style="background-image: url('https://img.youtube.com/vi/WKYGTgsX2Wg/mqdefault.jpg ');
                            height: 220px;" @endif>


                        <p class="uk-h4">
                            <a href="https://www.youtube.com/watch?v={!! $video->link !!}" class="my_video_count"
                                data-id="{{ $video->id }}">
                                <i class="fas fs-28 text-white fa-play-circle"></i>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="content-item">
                    <div class="row justify-content-between align-items-center mb-3">
                        <div class=" col-auto date-item fs-14 text-bold text-dark">
                            <a href="https://www.youtube.com/watch?v={!! $video->link !!}"
                                class="text-dark my_video_count" data-id="{{ $video->id }}">
                                {!! $video->{'title_' . Lang()} !!}
                            </a>
                        </div>
                        <div class="col-auto">
                            <span class=" fs-14 ">{!! $video->duration !!} {!! trans('site.minutes') !!}</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-1">
                        <div class="img-views">
                            <img src="" width="30" class="rounded-circle" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>
<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="pagination_section">
                {{ $videos->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
</section>


@push('js')
    <script type="text/javascript"></script>
@endpush
