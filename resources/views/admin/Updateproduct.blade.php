@extends('admin/layouts.commonA')
@section('title', 'Add product')
@section('content')
@include('admin/layouts/includes/navA')
<style type="text/css">
    #boo{
        color: darkblue;
    } 
    #product{
        background: #000000;
    } 
</style>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div style="" class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 style="color: #198754;" class="mb-4">Updating Product Form</h6>

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

                <form method="post" action="{{ route('products.update',$product->id) }}" enctype="multipart/form-data">
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
                        <select class="form-control" name="level_id" >
                            <option value="{{ $product->level_id }}">
                                @foreach($levels as $level)
                                {{ $level->level }}
                                @endforeach
                            </option>
                            @foreach($allLevel as $allL)
                            <option value="{{ $allL->id }}">{{ $allL->level }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <input type="text" class="form-control @error('pname') is-invalid @enderror" id="pname" name="pname" placeholder="product Name" value="{{ $product->pname }}">
                        @error('pname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <input type="text" class="form-control @error('creator') is-invalid @enderror" id="creator" name="creator" placeholder="creator" value="{{ $product->creator }}">
                        @error('creator')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <input type="text" class="form-control @error('color') is-invalid @enderror" id="color" name="color" placeholder="color" value="{{ $product->color }}">
                        @error('color')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-sm-12">
                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Price" value="{{ $product->price }}300">
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Description">{{ $product->description }}X</textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <label for="image" class="col-sm-2 col-form-label">product Cover</label>
                        <input class="form-control bg-dark @error('image') is-invalid @enderror" type="file" name="image">
                        @error('image')
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
