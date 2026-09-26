@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{$page->seo_title?:websiteTitle($page->name)}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{$page->seo_title?:websiteTitle($page->name)}}" />
        <meta name="description" property="og:description" content="{!!$page->seo_description?:general()->meta_description!!}" />
        <meta name="keywords" content="{{$page->seo_keyword?:general()->meta_keyword}}" />
        <meta name="image" property="og:image" content="{{asset($page->image())}}" />
        <meta name="url" property="og:url" content="{{route('pageView',$page->slug?:'no-title')}}" />
        <link rel="canonical" href="{{route('pageView',$page->slug?:'no-title')}}">
@endsection @push('css')
<style>
	.image a img {
    transition: 0.5s all;
    width: 100%;
}
.blogCompany {
    padding: 100px 0;
}
.blog-content .btn {
    border: 1px solid #0e580b;
    color: #1b5f17;
    background: unset;
}
.blog-sidebar .widget-title {
    color: #10570b;
}
.widget_categories .card-body a {
    color: #10570b;
}
.blog-sidebar {
    background-color: unset;
}


</style>
@endpush 

@section('contents')

{{--<div class="breadcrumb-area"
@if($page->bannerFile)
style="background-image:url({{asset($page->banner())}});background-repeat: no-repeat;
    background-size: cover;padding: 50px 0;"
@endif
>
    <div class="container">
        <div class="title">
            <h1>{{$page->name}}</h1>
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li>{{$page->name}}</li>
            </ul>
        </div>
    </div>
</div>--}}

    <section class="contact-cover-section">
        <div class="container">
            <h1 class="contact-cover-title">{{$page->name}}</h1>
            <div class="contact-cover-breadcrumb">
                <a href="{{route('index')}}">Home</a>
                <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                <span class="current">{{$page->name}}</span>
            </div>
        </div>
    </section>
    
    
    
        <section class="blog-grid-section section-padding">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-12">
                    <span class="blog-section-badge">Our Journal</span>
                    <h2 class="blog-section-title">Latest Articles & News</h2>
                </div>
            </div>
            
            <div class="row g-4">
                <!-- Blog Post 1 -->
                @foreach($posts as $post)
                <div class="col-lg-4 col-md-6">
                     @include(welcomeTheme().'blogs.includes.blogGrid')
                   
                </div>
                 @endforeach

            </div>

            	<!-- pagination -->
			{{$posts->links(welcomeTheme().'blogs.pagination')}}

            <!-- Pagination -->
           {{-- <div class="row mt-5">
                <div class="col-12">
                    <nav aria-label="Blog pagination">
                        <ul class="pagination justify-content-center blog-pagination">
                            <li class="page-item disabled"><a class="page-link" href="#"><i class="fa-solid fa-chevron-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-chevron-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>--}}
        </div>
    </section>



{{--<div class="blogCompany">
    <div class="container">
		<div class="row">
		<div class="col-md-12">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-md-4">
                  
                </div>
                @endforeach
            </div>
			<!-- pagination -->
			{{$posts->links(welcomeTheme().'blogs.pagination')}}
		</div>
	<div class="col-md-4">
			@include(welcomeTheme().'blogs.includes.sideBar')
		</div>
		</div>
	</div>
</div>--}}




@endsection @push('js') @endpush