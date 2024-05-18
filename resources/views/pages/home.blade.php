
@extends('layouts.app')

@section('content')
<div class="heder">
    <div class="title upcoming mb-4">
        <h2>UPCOMI NGT</h2>
    </div>
    <div class="card cardcustom mb-3" style="width: 540px; ">
        <div class="d-flex">
        <div class="col-lg-6 col-md-4 my-5 ms-5">
            <img src="/frontend/images/image 94.png" class="img-fluid rounded-start " style="width: 500px; " alt="...">
        </div>
        <div class="col-md-8 mt-5">
            <div class="card-body ms-3">
            <p class="card-text ">October 2024</p>
            <h5 class="card-title">Fullsun Love Date</h5>
            <p class="btn btn-second">10 Oct 2024</p>
            <p><b>200K</b></p>
            <button class="btn btn-primer my-5">View More </button>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="heder">
    <div class="title event mb-4 d-flex justify-content-between rounded-pill">
        <h4> EVENT</h4>
        <button class="btn btn-primer ">View More </button>
    </div>
    <a href="{{ route('detail_events') }}">

        <div class="card cardcustom " style="width: 270px;">
            <img src="/frontend/images/image 94.png" class="card-img-top " style="width: 270px; margin-top: -10px;" alt="...">
            <div class="card-body">
            <div class="card-text d-flex justify-content-between">
                <p class="btn btn-second" >22 Sept 2024</p>
                <p>150K</p>
            </div>
            <h5 class="card-title">Noraebang parti</h5>
            </div>
        </div>
    </a>
</div>
<div class="heder">
    <div class="title competition mb-4 d-flex justify-content-evenly rounded-pill">
        <h4> COMPETIT</h4>
        <button class="btn btn-primer">View More </button>
    </div>
    <div class="card cardcustom" style="width: 270px;">
        <img src="/frontend/images/image 94.png" class="card-img-top " style="width: 270px; margin-top: -10px;" alt="...">
        <div class="card-body">
            <div class="card-text d-flex justify-content-between">
                <p class="btn btn-second" >22 Sept 2024</p>
                <p>150K</p>
            </div>
            <h5 class="card-title">Dance Cover Competition</h5>
            </div>
    </div>
</div>
</div>

<div class="container noraebang my-4">
    <div class="title-section d-flex align-items-center mb-2">
        <div class="col-lg-2 col-md-2 col-sm-4 garis"> </div>

        <div class="title-competition ms-3">
            <h4>NORAEBANG</h4>
        </div>
    </div>

    <div class="desc-norebang d-flex mb-4 justify-content-between">
        <div class="deskripsi col-lg-8">
            <p>Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak</p>
        </div>
        <div class="btn-view-more">

            <button class="btn btn-primer">View More </button>
        </div>
    </div>

    <div class="container list-noraebang d-flex justify-content-evenly flex-wrap  ">
        <div class="norebang-content mb-4">
            <div class="card  cardcustom" style="width: 270px;">
                <img src="/frontend/images/image 94.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                <div class="card-body">
                    <div class="card-text d-flex justify-content-between">
                        <p class="btn btn-second">22 Sept 2024</p>
                        <div class="card-tiket d-flex justify-content-between ">
                            <p><img src="/frontend/images/tickets.png" alt="">
                            <p class="ms-2 fw-bold mt-1">150K</p>
                        </div>
                   
                    </div>
                    <h5 class="card-title">Dance Cover Competition</h5>
                </div>
            </div>
        </div>
        <div class="norebang-content mb-4">
            <div class="card  cardcustom" style="width: 270px;">
                <img src="/frontend/images/image 94.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                <div class="card-body">
                    <div class="card-text d-flex justify-content-between">
                        <p class="btn btn-second">22 Sept 2024</p>
                        <div class="card-tiket d-flex justify-content-between ">
                            <p><img src="/frontend/images/tickets.png" alt="">
                            <p class="ms-2 fw-bold mt-1">150K</p>
                        </div>
                   
                    </div>
                    <h5 class="card-title">Dance Cover Competition</h5>
                </div>
            </div>
        </div>
        <div class="norebang-content mb-4">
            <div class="card  cardcustom" style="width: 270px;">
                <img src="/frontend/images/image 94.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                <div class="card-body">
                    <div class="card-text d-flex justify-content-between">
                        <p class="btn btn-second">22 Sept 2024</p>
                        <div class="card-tiket d-flex justify-content-between ">
                            <p><img src="/frontend/images/tickets.png" alt="">
                            <p class="ms-2 fw-bold mt-1">150K</p>
                        </div>
                   
                    </div>
                    <h5 class="card-title">Dance Cover Competition</h5>
                </div>
            </div>
        </div>
        <div class="norebang-content mb-4">
            <div class="card  cardcustom" style="width: 270px;">
                <img src="/frontend/images/image 94.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                <div class="card-body">
                    <div class="card-text d-flex justify-content-between">
                        <p class="btn btn-second">22 Sept 2024</p>
                        <div class="card-tiket d-flex justify-content-between ">
                            <p><img src="/frontend/images/tickets.png" alt="">
                            <p class="ms-2 fw-bold mt-1">150K</p>
                        </div>
                   
                    </div>
                    <h5 class="card-title">Dance Cover Competition</h5>
                </div>
            </div>
        </div>


    </div>
</div>
<div class="container noraebang my-4">
    <div class="title-section d-flex align-items-center mb-2">
        <div class="col-lg-2 col-md-2 col-sm-4 garis"> </div>

        <div class="title-competition ms-3">
            <h4>NORAEBANG</h4>
        </div>
    </div>

    <div class="desc-norebang d-flex mb-4 justify-content-between">
        <div class="deskripsi col-lg-8">
            <p>Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak</p>
        </div>
        <div class="btn-view-more">

            <button class="btn btn-primer">View More </button>
        </div>
    </div>

    <div class="container list-noraebang d-flex justify-content-evenly flex-wrap  ">
        <div class="norebang-content mb-4">
            <div class="card  cardcustom" style="width: 270px;">
                <img src="/frontend/images/image 94.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                <div class="card-body">
                    <div class="card-text d-flex justify-content-between">
                        <p class="btn btn-second">22 Sept 2024</p>
                        <div class="card-tiket d-flex justify-content-between ">
                            <p><img src="/frontend/images/tickets.png" alt="">
                            <p class="ms-2 fw-bold mt-1">150K</p>
                        </div>
                   
                    </div>
                    <h5 class="card-title">Dance Cover Competition</h5>
                </div>
            </div>
        </div>
        <div class="norebang-content mb-4">
            <div class="card  cardcustom" style="width: 270px;">
                <img src="/frontend/images/image 94.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                <div class="card-body">
                    <div class="card-text d-flex justify-content-between">
                        <p class="btn btn-second">22 Sept 2024</p>
                        <div class="card-tiket d-flex justify-content-between ">
                            <p><img src="/frontend/images/tickets.png" alt="">
                            <p class="ms-2 fw-bold mt-1">150K</p>
                        </div>
                   
                    </div>
                    <h5 class="card-title">Dance Cover Competition</h5>
                </div>
            </div>
        </div>
        <div class="norebang-content mb-4">
            <div class="card  cardcustom" style="width: 270px;">
                <img src="/frontend/images/image 94.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                <div class="card-body">
                    <div class="card-text d-flex justify-content-between">
                        <p class="btn btn-second">22 Sept 2024</p>
                        <div class="card-tiket d-flex justify-content-between ">
                            <p><img src="/frontend/images/tickets.png" alt="">
                            <p class="ms-2 fw-bold mt-1">150K</p>
                        </div>
                   
                    </div>
                    <h5 class="card-title">Dance Cover Competition</h5>
                </div>
            </div>
        </div>
        <div class="norebang-content mb-4">
            <div class="card  cardcustom" style="width: 270px;">
                <img src="/frontend/images/image 94.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                <div class="card-body">
                    <div class="card-text d-flex justify-content-between">
                        <p class="btn btn-second">22 Sept 2024</p>
                        <div class="card-tiket d-flex justify-content-between ">
                            <p><img src="/frontend/images/tickets.png" alt="">
                            <p class="ms-2 fw-bold mt-1">150K</p>
                        </div>
                   
                    </div>
                    <h5 class="card-title">Dance Cover Competition</h5>
                </div>
            </div>
        </div>


    </div>
</div>

    
@endsection