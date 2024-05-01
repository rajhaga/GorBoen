@extends('layouts.Header')

@section('main')

<style>
    .search-results {
    margin-top: 20px;
}

.result-item {
    margin-bottom: 10px;
}

.result-item a {
    display: block;
    padding: 10px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    text-decoration: none;
    color: #333;
    transition: background-color 0.3s ease;
}

.result-item a:hover {
    background-color: #e9e9e9;
}

.place-img img{
    width: 370px; /* atur lebar gambar */
    height: 324px;
}

.blog-img img{
    width: 570px; /* atur lebar gambar */
    height: 369px;
}
    </style>

    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider hero-overly  slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="hero__caption">
                                    <h1>Find your <span>garden!</span> </h1>
                                    <p>Where do you want to garden??</p>
                                </div>
                            </div>
                        </div>
                        <!-- Search Box -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Formulir pencarian -->
                                <form action="{{ route('search') }}" method="GET" class="search-box">
                                    <div class="input-form mb-30">
                                        <input type="text" class="form-control" placeholder="What garden do you want to visit?" name="search">
                                    </div>
                                    <div class="search-form mb-30">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                                <!-- Hasil pencarian -->
                                <div class="search-results">
                                    @if (!empty($results))
                                        <ul>
                                            @foreach ($results as $result)
                                                <li>
                                                    <div class="result-item">
                                                        <div class="result-info">
                                                            <a href="wisata/{{ $result['_id'] }}" >{{ $result['judul'] }}</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <p>Tidak ada hasil pencarian.</p>
                                    @endif
                                </div>
                                
                                
                            </div>
                        </div>
                        
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <!-- slider Area End-->

         <!-- Our Services End -->
        <!-- Favourite Places Start -->

        <div class="favourite-place place-padding">
            <div class="container">
                <!-- Section Tittle -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>FEATURED TOURS Packages</span>
                            <h2>Favourite Garden</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @php
                        $wisataCollection = collect($wisata);
                        $contentCollection = collect($content);
                    @endphp 
                    @foreach ($wisataCollection->slice(0, 6) as $item) <!-- Menggunakan metode slice() untuk membatasi jumlah item menjadi 6 -->
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-place mb-30">
                                <div class="place-img">
                                    <?php             
                                        $imageSrc = 'data:image/png;base64,'. $item['gambar'];;
                                    ?>
                                    <img src="{{ $imageSrc }}" alt="">
                                </div>
                                <div class="place-cap">
                                    <div class="place-cap-top">
                                        <h3><a href="wisata/{{ $item['_id'] }}">{{$item["judul"] ? $item["judul"] : '' }}</a></h3>
                                    </div>
                                    <div class="place-cap-bottom">
                                        <ul>
                                            <li><i class="far fa-clock"></i>{{$item["Kontak"] ? $item["Kontak"] : '' }}</li>
                                            <li><i class="fas fa-map-marker-alt"></i>Bogor</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach   

                </div> 
            </div>
        </div>

        <!-- Favourite Places End -->
        <!-- Video Start Arera -->
        
        <!-- Video Start End -->
        <!-- Support Company Start-->
        <div class="mt-4">
           
        </div>
        <!-- Support Company End-->
        <!-- Testimonial Start -->
        <!-- Testimonial Start -->
        <div class="testimonial-area testimonial-padding" data-background="assets/img/testmonial/testimonial_bg.jpg">
            <div class="container ">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-11 col-lg-11 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <img src="assets/img/icon/testimonial.png" alt="">
                                        <p>Perkebunan bukan hanya tempat di mana tanaman tumbuh, tetapi juga jantung yang menghidupi komunitas, mewujudkan keberlanjutan lingkungan, dan menghubungkan kita kembali dengan alam.</p>
                                    </div>
                                
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <img src="assets/img/icon/testimonial.png" alt="">
                                        <p>Logisti Group is a representative logistics operator providing full range of ser
                                            of customs clearance and transportation worl.</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                        <div class="founder-img">
                                            <img src="assets/img/testmonial/Homepage_testi.png" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Jessya Inn</span>
                                            <p>Co Founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <!-- Blog Area Start -->
        <div class="home-blog-area section-padding2">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Our Recent news</span>
                            <h2>Tourist Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($contentCollection->slice(0, 4) as $item) <!-- Menggunakan metode slice() untuk membatasi jumlah item menjadi 6 -->
                   
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <?php             
                                        $imageSrc = 'data:image/png;base64,'. $item['gambar'];;
                                    ?>
                                    <img src="{{ $imageSrc }}" alt="">
                                </div>
                                
                                <div class="blog-cap">
                                    <p> |   Traveling</p>
                                    <h3><a href="/content/{{ $item['_id'] }}">{{$item["judul"] ? $item["judul"] : '' }}</a></h3>
                                    <a href="/content/{{ $item['_id'] }}" class="more-btn">Read more »</a>
                                </div>
                            </div>
                            <div class="blog-date text-center">
                                <span>{{ Carbon\Carbon::parse($item['tanggal'])->format('M') }}</span> <!-- Menampilkan bulan -->
                                <br>
                                <span>{{ Carbon\Carbon::parse($item['tanggal'])->format('j') }}</span> <!-- Menampilkan tanggal -->
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Blog Area End -->

    </main>
    
    @endsection