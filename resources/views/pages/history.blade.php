@extends('layouts.app')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: 'Poppins', sans-serif;
        }
        .card {
          margin-top: 50px;
        }
     
        .card {
            border: none; /* Hilangkan border bawaan card */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Tambahkan box shadow */
        }
        .card-img-top {
            height: 200px; /* Atur tinggi gambar sesuai kebutuhan */
            object-fit: cover; /* Pastikan gambar menutupi area dengan baik */
        }
        .content-top p {
          font-weight: 700;
        }
        .content-sisi-harga p {
          color: grey;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
      <div class="search-container">
        <h3 class="mb-4">Riwayat Pesanan Tiket</h3>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari pesanan...">
          <button class="btn btn-primary" type="button">Cari</button>
        </div>
      </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                  <div class="card-img-relative">
                    <img src="/frontend/images/image103.png" class="card-img-top" alt="Poster Festival Kuliner">
                    <span class="badge bg-success position-absolute top-0 start-0">Berlangsung</span>
                  </div>
                    <div class="card-body">
                        <h5 class="card-title fs-6">Noraebang Party "Special PCD Session"</h5>
                        <p class="card-text">15 Agustus 2024</p>
                        <p class="card-text">1 Tiket</p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Lihat Detail</a>
                    </div>
                </div>
            </div>

              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Detail Tiket</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="content">
                                <div class="content-top d-flex justify-content-between">
                                  <p>ID Transaksi</p>
                                  <P>Waktu Transaksi</P>
                                </div>
                                <div class="content-top-kanan d-flex justify-content-between">
                                  <p>ID12394XC</p>
                                  <P>21-Sep-2024 14:00 WIB</P>
                                </div>
                                <div class="content-isi">
                                  <p style="font-weight: 700;">Metode pembayaran</p>
                                  <p>QRIS</p>
                                  <p style="margin-top: 50px; font-weight: 600; color: navy;">Daftar Tiket</p>
                                  <p style="font-weight: 600; color:navy;">Noraebang Party "Special PCD Session"</p>
                                </div>
                                <div class="content-sisi-harga d-flex justify-content-between">
                                  <p>Total (1 tiket)</p>
                                  <p>75.000</p>
                                </div>
                              <div class="accordion" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                               Detail Acara
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body d-flex ms-10">
                                              <img src="/frontend/images/image103.png" alt="nora1" width="150px" height="100px">
                                              <div class="event-desc" style="margin-left: 20px; font-weight: 500;">
                                               <p style=" font-weight: 500;">Noraebang Party "Special PCD Session"</p>
                                               <p>Mall Kota Kasablanka</p>
                                               <p>21 September 2024 </p>
                                               <p>10:00 - selesai</p>
                                              </div>
                                           </div>
                                        </div>
                                    </div>
                                    
                                    </div>
                            </div>
                        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">Lanjut</button>
          </div>
        </div>
      </div>
    </div>
        <div class="col-md-4">
                  <div class="card">
                    <div class="card-img-relative">
                      <img src="/frontend/images/svt.png"  class="card-img-top" alt="Poster Festival Kuliner">
                      <span class="badge bg-secondary position-absolute top-0 start-0">Berakhir</span>
                    </div>
                      <div class="card-body">
                          <h5 class="card-title fs-6">Noraebang Party Carat</h5>
                          <p class="card-text">22 September 2024</p>
                          <p class="card-text">1 Tiket</p>
                          <a href="#" class="btn btn-primary">Lihat Detail</a>
                      </div>
                  </div>
          </div>
          </div>    
      </div>      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@endsection
