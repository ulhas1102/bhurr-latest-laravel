@extends('frontend-layout.app')
@section('title', 'Blogs - page')
@section('inline-css')

<style>
  .blog__grid__page .card {
    transition: 0.3s;
    border-color: #33333341;
    border-radius: 8px;
  }

  .blog__grid__page .card .card-title {
    color: black;
  }

  .blog__grid__page .card .card-title:hover {
    color: brown;
    text-decoration: underline;
  }

  .blog__grid__page .card:hover {
    box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
  }

  @media (min-width: 768px) {
    .blog__grid__page .card img {
      width: 100%;
      max-height: 200px;
      object-fit: cover;
    }
  }
</style>

</head>

<body class="special-bookings">
  @endsection

  @section('content')

  <section>
    <div class="container py-5 blog__grid__page">
      <h1 class="text-center mb-5">Our Blogs</h1>
      <div class="row">
        @foreach ($blogs as $blog)
        <!-- Blog Post 1 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img src="{{asset($blog->blog_image)}}" class="card-img-top" alt="{{$blog->slug}}" />
            <div class="card-body">
              @if($blog->child_category_name)
              <a
                href="{{url('blog')}}/{{str_replace(' ', '-', strtolower($blog->child_category_name))}}/{{str_replace(' ', '-', strtolower($blog->category_name))}}/{{$blog->slug}}">
                <h5 class="card-title">
                  {{$blog->title}}
                </h5>
              </a>
              @else
              <a href="{{url('blog')}}/{{str_replace(' ', '-', strtolower($blog->category_name))}}/{{$blog->slug}}">
                <h5 class="card-title">
                  {{$blog->title}}
                </h5>
              </a>
              @endif
              <p class="card-text text-muted">
                {!! Str::limit(strip_tags($blog->description, '<strong><em>'), 150) !!}
              </p>

            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  @endsection

  @section('inline-js')
  @endsection