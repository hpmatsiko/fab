@extends('layouts.common')
@section('title','Home Page')
@section('content')

<div class="container-xxl py-5">
    <div class="container">
        <div style="display: flex;justify-content: space-around;" class="row g-4">
            <h5>{{ $category->book_category }}</h5>

            @if ($subcategories->isEmpty())
            <p>No subcategories found in this category.</p>
            @else
            @foreach ($subcategories as $subcategory)
            <div class="col-lg-4 col-sm-12 bg-white shadow wow zoomIn" data-wow-delay="0.7s" style="word-break: break-all;">
             <div class="service-item text-center pt-3" >
                <div class="p-4" style="text-align: left;">
                    <h6 style="color: blue">{{ $subcategory->sub_category }}</h6>
                    @php
                    $subcategoryLevels = $levels->where('sub_category_id', $subcategory->id);
                    @endphp
                    @if ($subcategoryLevels->isEmpty())
                    <p>No levels found in this subcategory.</p>
                    @else
                    
                    @foreach ($subcategoryLevels as $level)
                    
                    <h6 style="color: red">{{ $level->level }}</h6>
                    @php
                    $subcategoryBooks = $books->where('level_id', $level->id);
                    @endphp
                    @if ($subcategoryBooks->isEmpty())
                    <p>No course found in this level.</p>
                    @else
                    <ul>
                        @foreach ($subcategoryBooks as $book)
                        <a class="boh" href="{{ route("login") }}" style="padding: 4vh;"><li>
                            {{ $book->bname }}
                            @if ($book->image)
                            <img src="{{ asset('bookImages/' . $book->image) }}" alt="Book Image" width="100">
                            @endif
                        </li></a>
                        @endforeach
                        @endif
                    </ul>

                    @endforeach

                    @endif
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
</div>
@endsection