<div class="row justify-content-center">
    @foreach ($articles as $article)
        <div class="col-lg-4 col-md-4 mb-4">
            <div class="item-course">
                <div class="img-course">
                    @if ($article->photo)
                        <img src="{!! asset('adminBoard/uploadedImages/articles/' . $article->photo) !!}" alt="{!! $article->{'title_' . Lang()} !!}">
                    @else
                        <img src="{!! asset('site/images/articles.jpg') !!}" class="img-fluid" alt="{!! $article->{'title_' . Lang()} !!}">
                    @endif

                </div>
                <div class="content-item">
                    <div class="row justify-content-between align-items-center">
                        <div class=" col-auto date-item fs-12">
                            {!! $article->publish_date !!}
                        </div>
                        <div class="col-auto">
                            <span class=" btn bg-warning-light py-1 br-20 text-warning">
                                {!! $article->publisher_name !!}
                            </span>
                        </div>
                    </div>
                    <div class="fs-16 text-bold my-2 text-dark">
                        {!! $article->{'title_' . Lang()} !!}
                    </div>
                    <p class="mb-3 fs-12">
                        {!! \Illuminate\Support\Str::limit(strip_tags($article->{'abstract_' . Lang()}), $limit = 250, $end = '...') !!}

                    </p>


                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <a href="article/{!! $article->{'title_' . Lang() . '_slug'} !!}" class="btn btn-primary br-30 text-bold">
                                {!! trans('site.read_more') !!}
                            </a>
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
                {{ $articles->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
</section>
