<div class="row justify-content-center ">

    @foreach ($photoAlbums as $photoAlbum)
        <div class="col-lg-4 col-md-4  mb-2">
            <a href="{!! asset('adminBoard/uploadedImages/albums/' . $photoAlbum->main_photo) !!}" data-fancybox="images-preview-{!! $photoAlbum->id !!}" data-width="1500"
                data-height="1000" data-thumbs='{"autoStart":true}'>

                <div class="card item-course">

                    @if ($photoAlbum->main_photo)
                        <img class="card-img-top" src="{!! asset('adminBoard/uploadedImages/albums/' . $photoAlbum->main_photo) !!}" alt="{!! $photoAlbum->{'title_' . Lang()} !!}">
                    @else
                        <img class="card-img-top" src="{!! asset('site/images/no_photo_albums.jpg') !!}" alt="{!! $photoAlbum->{'title_' . Lang()} !!}">
                    @endif


                    <div class="card-body content-item">
                        <p class="card-text col-auto date-item fs-14 text-bold text-dark pt-3 pb-2">
                            {!! $photoAlbum->{'title_' . Lang()} !!}
                        </p>
                    </div>
                </div>
            </a>

            <div style="display: none;">
                @if (\App\UploadFile::where('relation_id', $photoAlbum->id)->count() > 0)
                    @foreach (\App\UploadFile::get()->where('relation_id', $photoAlbum->id) as $file)
                        <a href="{!! asset('adminBoard/uploadedImages/albums/' . $file->full_path_after_upload) !!}" data-fancybox="images-preview-{!! $photoAlbum->id !!}"
                            data-width="1500" data-height="1000" data-thumb="{!! asset('adminBoard/uploadedImages/albums/' . $file->full_path_after_upload) !!}"></a>
                    @endforeach
                @endif
            </div>
        </div>
    @endforeach



</div>
<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="pagination_section">
                {{ $photoAlbums->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
</section>


@push('js')
@endpush
