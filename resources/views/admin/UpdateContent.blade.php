@extends('admin/layouts.commonA')
@section('title', 'Add Book Category')
@section('content')
@include('admin/layouts/includes/navA')
<style type="text/css" media="screen">
    #cont{
        color: darkblue;
    } 
    #conte{
        background: #000000;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div style="" class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 style="color: #198754;" class="mb-4">Update Welcome page content</h6>

                <!-- Display Success Message -->
                @if(session('suc'))
                <div class="alert alert-success">
                    {{ session('suc') }}
                </div>
                @endif

                <form method="post" action="{{ route('UpdateContent',$cont->id) }}" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <select id="locale" name="locale" class="form-control @error('locale') is-invalid @enderror">
                                <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                                <option value="fr" {{ app()->getLocale() == 'fr' ? 'selected' : '' }}>French</option>
                                <option value="kin" {{ app()->getLocale() == 'kin' ? 'selected' : '' }}>Kinyarwanda</option>

                            </select>
                            @error('locale')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <textarea id="note" class="form-control @error('content') is-invalid @enderror" name="content" placeholder="Write welcome content">
                                @foreach($content as $cont)
                                {!! $cont->content !!}
                                @endforeach

                            </textarea>
                            @error('note')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <button style="background: #198754;border: none;color: darkgrey;" type="submit" class="btn btn-primary">Kwinjiza</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="/tinymce/tinymce.min.js"></script>
<script type="text/javascript" >
    tinymce.init({
        selector: 'textarea#note',

        height: 700,
        plugins:[
        'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'prewiew', 'anchor', 'pagebreak',
        'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media', 
        'table', 'emoticons', 'template', 'codesample'
        ],
        toolbar: 'undo redo | styles | bold italic underline | alignleft aligncenter alignright alignjustify |' + 
        'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
        'forecolor backcolor emoticons',
        menu: {
            favs: {title: 'menu', items: 'code visualaid | searchreplace | emoticons'}
        },
        menubar: 'favs file edit view insert format tools table',
        content_style: 'body{font-family:Helvetica,Arial,sans-serif; font-size:16px}'
    });
</script>
@include('admin/layouts/includes/footer') 

@endsection
