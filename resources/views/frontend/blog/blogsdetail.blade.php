
 @section('meta_title')
 {{$blog->meta_tittle}}
 @endsection
 @section('meta_description')
 {{$blog->meta_description}}
 @endsection

 @extends('frontend.master')

@section('content')
<style>
  .blog-content ul li{
    list-style:initial;
  }

    .blog-content ol li{
    list-style:decimal;
  }
</style>
 <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a>  /  Blogs</span>
          <h3>Blogs</h3>
        </div>
      </div>
    </div>
  </div>
  


<div class="single-property section new">
    <div class="container">
        <div class="row">
          <div class="col-lg-5 title-container">
                <h1 class="fs-35">{{ $blog->title }}</h1>
            </div>
            <div class="col-lg-7">
                <img src="{{ asset($blog->image) }}" alt="Blog image" class="blog-image" width="100%" height="500px">
            </div>
             <div class="container-fluid mt-2">
              
        <nav class="bg-c d-flex justify-content-center" aria-label="breadcrumb">
            <ol class="breadcrumb mt-4">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                <li class="breadcrumb-item  hidden"><a href="#">{{ $blog->key_words }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
            </ol>
        </nav>
    </div>
            <div class="col-lg-12 mb-4 mbt-2">
                <div class="blog-content">
                    {{-- <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog image" class="img-fluid"> --}}
                    
                    <span class="blog-time ">{{ \Carbon\Carbon::parse($blog->date)->format('l M d, Y') }}</span>
                    <br>
                    <div class="blog-content">
                      <p class="mt-4">{!! $blog->content !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
 

 


@endsection