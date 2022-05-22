@extends('client.template.master')
@section('header')
    <header class="page-header">
        <div class="container">
            <h1>Bài viết</h1>
        </div>
    </header>
@show
@section('content')

    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($post as $item)
                    <div class="news-box">
                        <figure>
                            <img src="{{ asset($item->image_artical) }}" alt="Image">
                        </figure>
                        <div class="content overlap"> <small>{{ $item->created_at }}</small>
                            <h3><a href="{{ route('client.detail.post', ['id'=>$item->id_artical ]) }}">{{ $item->artical_name }}</a></h3>
                            <!-- end author -->
                        </div>
                        <!-- end content -->
                    </div>
                    @endforeach
                </div>
                <!-- end col-8 -->
                <div class="col-lg-4">
                    <aside class="sidebar">
                        {{-- <div class="widget">
                            <h6 class="widget-title">SEARCH</h6>
                            <form>
                                <input type="search" placeholder="Type here to search">
                                <input type="submit" value="Search">
                            </form>
                        </div> --}}
                        <!-- end widget -->
                        {{-- <div class="widget">
                            <h6 class="widget-title">CATEGORIES</h6>
                            <ul class="categories">
                                <li><a href="#">New Releases</a></li>
                                <li><a href="#">Emmy Awards Shows</a></li>
                                <li><a href="#">Documentaries</a></li>
                                <li><a href="#">Mini Serials</a></li>
                                <li><a href="#">Other Platforms</a></li>
                                <li><a href="#">digiflex Production</a></li>
                                <li><a href="#">Hot Commercials</a></li>
                            </ul>
                        </div>
                        <!-- end widget -->

                        <div class="widget">
                            <h6 class="widget-title">GALLERY</h6>
                            <ul class="side-gallery">
                                <li><img src="images/movies01.jpg" alt="Image"></li>
                                <li><img src="images/movies02.jpg" alt="Image"></li>
                                <li><img src="images/movies03.jpg" alt="Image"></li>
                                <li><img src="images/movies04.jpg" alt="Image"></li>
                                <li><img src="images/movies05.jpg" alt="Image"></li>
                                <li><img src="images/movies06.jpg" alt="Image"></li>
                            </ul>
                        </div> --}}
                        <!-- end widget -->
                    </aside>
                    <!-- end sidebar -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
@endsection
