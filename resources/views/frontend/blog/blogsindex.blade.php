@extends('frontend.master')
  @section('meta_title', 'UAE Banking Sol Blog - Insights & Updates ')
@section('meta_description', 'Explore informative articles and insightful updates on banking, finance, and more. Stay informed with the latest trends and tips from the BankingSol Blog')


@section('title', 'Blogs')

@section('content')
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Blogs</h3>
            </div>
        </div>
    </div>
</div>
<div class="single-property section new">
    <div class="container">
        <div class="row news row-cols-1 row-cols-md-3 g-4">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-img-holder">
                        <img src="{{ asset($blog->image) }}" alt="Blog image">
                    </div>
                    <h3 class="blog-title">{{ Str::limit( $blog->title,50 )}}</h3>
                    <span class="blog-time">{{ \Carbon\Carbon::parse($blog->date)->format('l M d, Y') }}</span>
                    {{-- <p class="description">{!! Str::limit($blog->content, 150)!!}</p> --}}
                    <div class="options">
                        <a href="{{ route('blogs.show',['slug'=> $blog->slug]) }}" class="btn btn-primary">Read Full Blog</a>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</div>
@endsection
