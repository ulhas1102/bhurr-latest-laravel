@extends('frontend-layout.app')
@section('title', $blog->seotitle)
@section('inline-css')
<style>
    .individual__blog__page a {
        color: #b61032;
        font-weight: 500;
    }

    .individual__blog__page a:hover {
        text-decoration: underline !important;
    }

    body {
        font-weight: unset;
    }


    .blog ul {
        list-style: disc;
        padding-inline-start: 40px;
    }

    footer ul,
    .navbar ul {
        list-style: none !important;
        padding-inline-start: 0 !important;
    }

    @media (min-width:768px) {

        .individual__blog__page .blog__image {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 8px;
        }

        .individual__blog__page .latest-blog img {
            width: 100%;
            max-height: 120px;
            object-fit: cover;
            border-radius: 4px;
        }

        .individual__blog__page .latest-blog a {
            color: black !important;
        }

        .individual__blog__page .latest-blog a:hover {
            color: brown;
            text-decoration: underline !important;
        }

    }
</style>
</head>

<body class="blog">
    @endsection
    @section('content')

    <div class="container py-md-5 py-3   individual__blog__page">
        <div class="row">
            <div class="col-md-9 card shadow">
                <!-- Blog Header -->
                <div class="container mt-3">
                    <h1 class="">{{$blog->title}}</h1>
                    <p class=" text-muted">
                        Posted on {{date('Y-m-d', $blog->published_date)}} | By {{$blog->author}}
                    </p>
                </div <!-- Blog Image -->
                <div class="">
                    <img src="{{asset($blog->blog_image)}}" class="img-fluid blog__image" alt="{{$blog->slug}}" />
                </div>

                <!-- Blog Content -->
                <div class="container mt-5">
                    {!!html_entity_decode($blog->description)!!}
                </div>

                <!-- Back to Blog Grid Button -->
                <!-- <div class="container my-5">
                    <a href="blog.html" class="btn common__btn">Back to All Blogs</a>
                </div> -->
            </div>
            <div class="col-md-3 d-md-block mt-4 mt-md-0">
                <h4 class="mb-3">Latest Blogs</h4>
                @foreach ($featuredBlogs as $data)
                <div class="latest-blog  mb-4">
                    <img src="{{asset($data->blog_image)}}" class="img-fluid" alt="{{$data->slug}}">
                    <h5 class="mt-2 ">
                        @if($data->child_category_name)
                        <a
                            href="{{url('blog')}}/{{str_replace(' ', '-', strtolower($data->child_category_name))}}/{{str_replace(' ', '-', strtolower($data->category_name))}}/{{$data->slug}}">
                            <h5 class="card-title">
                                {{$data->title}}
                            </h5>
                        </a>
                        @else
                        <a
                            href="{{url('blog')}}/{{str_replace(' ', '-', strtolower($data->category_name))}}/{{$data->slug}}">
                            <h5 class="card-title">
                                {{$data->title}}
                            </h5>
                        </a>
                        @endif
                    </h5>
                    <p class="text-muted">Posted on {{date('Y-m-d', $data->published_date)}} | By {{$data->author}}</p>
                </div>
                @endforeach
                <hr>
                <h4 class="mb-3">Tags</h4>
                @foreach ($tags as $data)
                <div class="latest-blog  mb-4">
                    <a href="{{url('/blog/' . str_replace(' ', '-', strtolower($data->name)))}}">
                        <h6 class="card-title">
                            {{$data->name}}
                        </h6>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection
    @section('inline-js')

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BlogPosting",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "{{Request::url()}}"
            },
            "headline": "{{$blog->seotitle}}",
            "image": "https://demo.webwideit.solutions/blog/public/{{$blog->blog_image}}"
        },
        "datePublished": "{{date('Y-m-d', $blog->published_date)}}",
        "dateModified": "{{date('Y-m-d', $blog->published_date)}}"
    </script>
    @endsection