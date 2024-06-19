@extends('admin/layouts.commonA')
@section('title', 'Add Book')
@section('content')
@include('admin/layouts/includes/navA')
<style type="text/css">
    #le{
        color: darkblue;
    } 
    #lev{
        background: #000000;
    } 
</style>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div style="" class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 style="color: #198754;" class="mb-4">Updating fevel form</h6>

                @if(session('suc'))
                <div class="alert alert-success">{{ session('suc') }}</div>
                @endif
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="post" action="{{ route('level.update',$level->id) }}" enctype="multipart/form-data">
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
                        <select class="form-control" name="sub_category_id" >
                            <option value="{{ $level->sub_category_id }}">
                                @foreach($SubCategory as $SubCat)
                                {{ $SubCat->sub_category }}
                                @endforeach
                            </option>
                            @foreach($allSubcat as $Subcats)
                            <option value="{{ $Subcats->id }}">{{ $Subcats->sub_category }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <input type="text" class="form-control @error('level') is-invalid @enderror" id="level" name="level" placeholder="Level" value="{{ $level->level }}">
                        @error('level')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

               

                <button style="background: #198754;border: none;color: darkgrey;" type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
</div>

<script src="/tinymce/tinymce.min.js"></script>
<script type="text/javascript" >
    tinymce.init({
        selector: 'textarea#description',

        height: 300,
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
