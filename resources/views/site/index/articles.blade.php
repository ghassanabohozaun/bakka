@if (!$articles->isEmpty())
    <section class="our-articles pb-5 py-5">
        <div class=" container">
            <div class=" text-center">
                <h2 class=" text-bold mb-3" data-aos="fade-down" data-aos-duration="1800">
                    {!! __('site.latest_articles') !!}
                </h2>

            </div>
            <div class="row mt-5 justify-content-center">
                @foreach ($articles as $article)
                    <div class="col-lg-6 col-md-6 mb-8" data-aos="fade-down" data-aos-duration="1900">
                        <div class="item-course">
                            <div class="img-course">
                                @if ($article->photo)
                                    <img src="{!! asset('adminBoard/uploadedImages/articles/' . $article->photo) !!}" height="500" alt="{!! $article->{'title_' . Lang()} !!}">
                                @else
                                    <img src="{!! asset('site/images/articles.svg') !!}" class="img-fluid" height="500"
                                        alt="{!! $article->{'title_' . Lang()} !!}">
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
                                        <a href="article/{!! $article->{'title_' . Lang() . '_slug'} !!}"
                                            class="btn btn-primary br-30 text-bold">
                                            {!! trans('site.read_more') !!}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
