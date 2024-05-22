@extends('layouts.kontenhead')

@section('content')
<div class="container-fluid">
  <div class="bungkus mt">
    <div class="box">
      <p class="fw-bold fs-4"style="color: navy;">Noraebang Party "Special PCD Session"</p>
      <p  style="margin-top: -5px; color: grey; font-size: 20px;"> Mall Kota Kasablanka</p>
      <img src="/frontend/images/image103.png" width="550px" height="300px" >
      <div class="content">
        <div class="info">
           <p  style="margin-top: 20px; "><b>Deskripsi</b></p>
            <hr width="98%" size="2" color="#F25D9C" noshade>
            <div class="desc" style="margin-top: 10px;">
            <p style="margin-bottom: 10px;"> Noraebang adalah skaraoke ala Korea Selatan yang biasanya dilakukan secara massal.  Noraebang menjadi ajang untuk berkumpul dan bernyanyi bersama teman satu fandom dan sesama K-Popers lainnya. Yuk Chingu kita seru-seruan Karokean lagu- lagu
           k-pop hits sambil joget bareng </p> 
           <p>Tanggal       : 30 September 2023</p> 
           <p>Waktu         : 9.00 - selesai</p>
          <p>Lokasi        : Mall Kota Kasablanka</p>
          </div>
          <div class="benefit" style="margin-top: 25px;">
          <p><b>Benefit</b></p>
          <hr width="98%" size="2" color="#F25D9C" noshade>
          <div class="square">
            <div class="item">
              <img src="/frontend/images/image104.png" width="30px" height="30px" alt="Snack">
              <p>Snack & drink</p>
            </div>
            <div class="item">
              <img src="/frontend/images/image104.png" width="30px" height="30px" alt="Snack">
              <p>Freebies</p>
            </div>
            <div class="item">
              <img src="/frontend/images/image104.png" width="30px" height="30px" alt="Snack">
              <p>Special Guest</p>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <div class="box-pay ">
      <div class="box-ticket">
        <p><b>Rincian Pesanan</b></p>
        <div class="ticket-price" style="margin-top: -5px;">Noraebang Party <br>"Special PCD Session"</div>
        <div class="total" style="color:grey; margin-top: 20px; ">IDR 75.000</div>
        <hr width="235%" size="1" color="grey" noshade style="margin-top: 10px; margin-bottom: 10px;">
        <div class="total-bottom" style="color:navy; margin-top: 10px;">Total (1 tiket)</div>
      </div>
      <div class="ticket-section">
        <div class="product">
          <button class="plus-btn">-</button>
          <span class="quantity">1</span>
          <button class="minus-btn">+</button>
          
          <div class="ticket-max">max 1 tix/user</div>
          <div class="total-bottom-right" style="margin-bottom: 50px;">75.000</div>
          
        </div>
        <div class="additional-buttons">
            <button class="batal" style ="margin-bottom: 100px;">Batal</button>
            <button class="lanjut" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style ="margin-bottom: 100px;">Lanjut</button>
          </div>
      </div>      
    </div>  
  </div>
</div>


<!-- Modal 1-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Informasi Pemesan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="content">
        <form action="POST">
          <div class="user-details">
              <div class="input-box">
                <span class="details">Nama Lengkap</span>
                <input type="text" required>
              </div>
              <div class="input-box">
                <span class="details">Email</span>
                <input type="email" required>
              </div>
              <div class="input-box">
                <span class="details">No Handphone</span>
                <input type="text" required>
              </div>
          </div>
        </form>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">Lanjut</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2-->
<div class="modal fade" id="modal1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal3Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal2Label">Metode Pembayaran</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="content">
        <form action="POST">
          <div class="form-check mb-2 gap-3 d-flex align-items-center">
            <input class="form-check-input" data-bs-toggle="modal" data-bs-target="#modal6" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label d-flex gap-3 align-items-center" for="exampleRadios1">
              <img src="/frontend/images/bri.png" alt="" width="60px" height="40px">   
              <p style="margin-top:10px;">BRI Virtual Account</p>
            </label>
          </div>
          <div class="form-check mb-2 gap-3 d-flex align-items-center">
            <input class="form-check-input" data-bs-toggle="modal" data-bs-target="#modal5" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label d-flex gap-3 align-items-center" for="exampleRadios2">
              <img src="/frontend/images/bni.png" alt="" width="60px" height="40px">    
              <p style="margin-top:10px;">BNI Virtual Account</p>        
            </label>
          </div>
          <div class="form-check mb-2 gap-3 d-flex align-items-center">
            <input class="form-check-input" data-bs-toggle="modal" data-bs-target="#modal4" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
            <label class="form-check-label d-flex gap-3 align-items-center" for="exampleRadios3">
              <img src="/frontend/images/mandiri.png" alt="" width="60px" height="40px">
              <p style="margin-top:10px;">Mandiri Virtual Account</p>      
            </label>
          </div>
          <div class="form-check mb-2 gap-3 d-flex align-items-center">
            <input class="form-check-input" data-bs-toggle="modal" data-bs-target="#modal3" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
            <label class="form-check-label d-flex gap-3 align-items-center" for="exampleRadios3">
              <img src="/frontend/images/bca.png" alt="" width="60px" height="40px">
              <p style="margin-top:10px;">BCA Virtual Account</p>  
            </label>
          </div>
          <div class="form-check mb-2 gap-3 d-flex align-items-center">
            <input class="form-check-input" data-bs-toggle="modal" data-bs-target="#modal2" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
            <label class="form-check-label d-flex gap-3 align-items-center" for="exampleRadios3">
              <img src="/frontend/images/qris.png" alt="" width="60px" height="40px">    
              <p style="margin-top:10px;">QRIS</p>
            </label>
          </div>
        </form>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>

  <!---Modal 3 QRIS-->
<div class="modal fade" id="modal2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"> 
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal2Label">Konfirmasi Pembayaran</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> <div class="detail-order"> 
          <div class="detail-order-top"> 
            <p style="margin-left: 10px;">ID pesanan : ID45764 </p>
            <p style="margin-left: 10px; margin-top: -20px;">Email pesanan : alfiranabilll@gmail.com </p>
          </div>
          <div class="detail-order-title"> 
            <p style="margin-left: 10px; color: navy; font-weight: 700;">Order Detail </p>
            <div class="tes d-flex justify-content-between">
            <p style="margin-left: 10px; color: navy;  margin-top: -10px; font-weight: 500;">Noraebang Party<br> "Special PCD Session"</p>
            <p style="margin-left: -30px; color: navy; font-weight: 500;"> 1 ticket </p>
            </div>
            <p style="color: white; background-color: red; text-align: center; font-weight: 600;">Menunggu Pembayaran 14:58</p>
          </div>
          <div class="detail-order-middle"> 
            <label class="form-check-label d-flex gap-3 align-items-center" for="exampleRadios3">
              <img src="/frontend/images/qris.png" alt="" width="60px" height="40px" style="margin-left: 10px;">
              <p style="margin-top: 15px;">QRIS</p>
            </label>
          </div>
          <div class="detail-order-end"> 
            <p style="margin-left: 10px; font-weight: 600;">Total pembayaran</p>
            <p class="total-pembayaran">75.000</p> 
          </div>
          <div class="detail-order-final d-flex">
            <img src="/frontend/images/barcode.png" alt="" width="200px" height="200px" style="margin-left: 10px; margin-top: 10px;">
            <div class="payment-instructions"> 
                <p style="margin-left: 20px;">Instruksi Pembayaran:</p>
                <ol> <div class="detail-order-final d-flex flex-column"> 
                    <li>Pastikan Anda memiliki akun di sebuah e-wallet atau mobile banking (ShopeePay, LinkAja, GO-PAY, DANA, mBCA, Livin by Mandiri, BRImo, dll)</li>
                    <li>Selesaikan pembayaran via aplikasi yang dipilih dengan cara melakukan scan atau upload QR.</li>
                    <li>Lakukan pembayaran sebelum tenggat waktu (15 menit)</li>
                </ol>
            </div>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal7">Cek status pembayaran</button>
      </div>
    </div>
  </div>
</div>

<!--Modal 4 BCA-->
<div class="modal fade" id="modal3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"> 
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal2Label">Konfirmasi Pembayaran</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> <div class="detail-order"> 
          <div class="detail-order-top"> 
            <p style="margin-left: 10px;">ID pesanan : ID45764 </p>
            <p style="margin-left: 10px; margin-top: -20px;">Email pesanan : alfiranabilll@gmail.com </p>
          </div>
          <div class="detail-order-title"> 
            <p style="margin-left: 10px; color: navy; font-weight: 700;">Order Detail </p>
            <div class="tes d-flex justify-content-between">
            <p style="margin-left: 10px; color: navy;  margin-top: -10px; font-weight: 500;">Noraebang Party<br> "Special PCD Session"</p>
            <p style="margin-left: -30px; color: navy; font-weight: 500;"> 1 ticket </p>
            </div>
            <p style="color: white; background-color: red; text-align: center; font-weight: 600;">Menunggu Pembayaran 14:58</p>
          </div>
          <div class="detail-order-middle"> 
            <label class="form-check-label d-flex gap-3 align-items-center" for="exampleRadios3">
              <img src="/frontend/images/bca.png" alt="" width="60px" height="40px" style="margin-left: 10px;">
              <p style="margin-top: 15px;">BCA Virtual Account</p>
            </label>
          </div>
          <div class="detail-order-end"> 
            <p style="margin-left: 10px; font-weight: 600;">Total pembayaran</p>
            <p class="total-pembayaran">75.000</p> 
          </div>
          <div class="detail-order-final d-flex">
            <div class="payment-instructions"> 
                <p style="margin-left: 10px;">Instruksi Pembayaran:</p>
                <ol> <div class="detail-order-final d-flex flex-column"> 
                <li>Pembayaran dapat dilakukan di ATM BCA atau Mobile Banking</li>
                <li>Pilih menu pembayaran Virtual Account</li>
                <li>Masukkan nomor Permata Virtual Account</li>
                <li>Masukkan jumlah pembayaran sesuai tagihan</li>
                <li>Lakukan pembayaran sebelum tenggat waktu</li>
                </ol>
            </div>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal7">Cek status pembayaran</button>
      </div>
    </div>
  </div>
</div>

<!--Modal 5 mandiri-->
<div class="modal fade" id="modal4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"> 
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal2Label">Konfirmasi Pembayaran</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> <div class="detail-order"> 
          <div class="detail-order-top"> 
            <p style="margin-left: 10px;">ID pesanan : ID45764 </p>
            <p style="margin-left: 10px; margin-top: -20px;">Email pesanan : alfiranabilll@gmail.com </p>
          </div>
          <div class="detail-order-title"> 
            <p style="margin-left: 10px; color: navy; font-weight: 700;">Order Detail </p>
            <div class="tes d-flex justify-content-between">
            <p style="margin-left: 10px; color: navy;  margin-top: -10px; font-weight: 500;">Noraebang Party<br> "Special PCD Session"</p>
            <p style="margin-left: -30px; color: navy; font-weight: 500;"> 1 ticket </p>
            </div>
            <p style="color: white; background-color: red; text-align: center; font-weight: 600;">Menunggu Pembayaran 14:58</p>
          </div>
          <div class="detail-order-middle"> 
            <label class="form-check-label d-flex gap-3 align-items-center" for="exampleRadios3">
              <img src="/frontend/images/mandiri.png" alt="" width="60px" height="40px" style="margin-left: 10px;">
              <p style="margin-top: 15px;">Mandiri Virtual Account</p>
            </label>
          </div>
          <div class="detail-order-end"> 
            <p style="margin-left: 10px; font-weight: 600;">Total pembayaran</p>
            <p class="total-pembayaran">75.000</p> 
          </div>
          <div class="detail-order-final d-flex">
            <div class="payment-instructions"> 
                <p style="margin-left: 10px;">Instruksi Pembayaran:</p>
                <ol> <div class="detail-order-final d-flex flex-column"> 
                <li>Pembayaran dapat dilakukan di ATM Mandiri atau Mobile Banking</li>
                <li>Pilih menu pembayaran Virtual Account</li>
                <li>Masukkan nomor Permata Virtual Account</li>
                <li>Masukkan jumlah pembayaran sesuai tagihan</li>
                <li>Lakukan pembayaran sebelum tenggat waktu</li>
                </ol>
            </div>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal7">Cek status pembayaran</button>

      </div>
    </div>
  </div>
</div>

<!--Modal 6 BNI-->
<div class="modal fade" id="modal5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"> 
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal2Label">Konfirmasi Pembayaran</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> <div class="detail-order"> 
          <div class="detail-order-top"> 
            <p style="margin-left: 10px;">ID pesanan : ID45764 </p>
            <p style="margin-left: 10px; margin-top: -20px;">Email pesanan : alfiranabilll@gmail.com </p>
          </div>
          <div class="detail-order-title"> 
            <p style="margin-left: 10px; color: navy; font-weight: 700;">Order Detail </p>
            <div class="tes d-flex justify-content-between">
            <p style="margin-left: 10px; color: navy;  margin-top: -10px; font-weight: 500;">Noraebang Party<br> "Special PCD Session"</p>
            <p style="margin-left: -30px; color: navy; font-weight: 500;"> 1 ticket </p>
            </div>
            <p style="color: white; background-color: red; text-align: center; font-weight: 600;">Menunggu Pembayaran 14:58</p>
          </div>
          <div class="detail-order-middle"> 
            <label class="form-check-label d-flex gap-3 align-items-center" for="exampleRadios3">
              <img src="/frontend/images/bni.png" alt="" width="60px" height="40px" style="margin-left: 10px;">
              <p style="margin-top: 15px;">BNI Virtual Account</p>
            </label>
          </div>
          <div class="detail-order-end"> 
            <p style="margin-left: 10px; font-weight: 600;">Total pembayaran</p>
            <p class="total-pembayaran">75.000</p> 
          </div>
          <div class="detail-order-final d-flex">
            <div class="payment-instructions"> 
                <p style="margin-left: 10px;">Instruksi Pembayaran:</p>
                <ol> <div class="detail-order-final d-flex flex-column"> 
                <li>Pembayaran dapat dilakukan di ATM BNI atau Mobile Banking</li>
                <li>Pilih menu pembayaran Virtual Account</li>
                <li>Masukkan nomor Permata Virtual Account</li>
                <li>Masukkan jumlah pembayaran sesuai tagihan</li>
                <li>Lakukan pembayaran sebelum tenggat waktu</li>
                </ol>
            </div>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal7">Cek status pembayaran</button>

      </div>
    </div>
  </div>
</div>

<!--Modal 7 BRI-->
<div class="modal fade" id="modal6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"> 
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal2Label">Konfirmasi Pembayaran</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> <div class="detail-order"> 
          <div class="detail-order-top"> 
            <p style="margin-left: 10px;">ID pesanan : ID45764 </p>
            <p style="margin-left: 10px; margin-top: -20px;">Email pesanan : alfiranabilll@gmail.com </p>
          </div>
          <div class="detail-order-title"> 
            <p style="margin-left: 10px; color: navy; font-weight: 700;">Order Detail </p>
            <div class="tes d-flex justify-content-between">
            <p style="margin-left: 10px; color: navy;  margin-top: -10px; font-weight: 500;">Noraebang Party<br> "Special PCD Session"</p>
            <p style="margin-left: -30px; color: navy; font-weight: 500;"> 1 ticket </p>
            </div>
            <p style="color: white; background-color: red; text-align: center; font-weight: 600;">Menunggu Pembayaran 14:58</p>
          </div>
          <div class="detail-order-middle"> 
            <label class="form-check-label d-flex gap-3 align-items-center" for="exampleRadios3">
              <img src="/frontend/images/bri.png" alt="" width="60px" height="40px" style="margin-left: 10px;">
              <p style="margin-top: 15px;">BRI Virtual Account</p>
            </label>
          </div>
          <div class="detail-order-end"> 
            <p style="margin-left: 10px; font-weight: 600;">Total pembayaran</p>
            <p class="total-pembayaran">75.000</p> 
          </div>
          <div class="detail-order-final d-flex">
            <div class="payment-instructions"> 
                <p style="margin-left: 10px;">Instruksi Pembayaran:</p>
                <ol> <div class="detail-order-final d-flex flex-column"> 
                <li>Pembayaran dapat dilakukan di ATM BRI atau Mobile Banking</li>
                <li>Pilih menu pembayaran Virtual Account</li>
                <li>Masukkan nomor Permata Virtual Account</li>
                <li>Masukkan jumlah pembayaran sesuai tagihan</li>
                <li>Lakukan pembayaran sebelum tenggat waktu</li>
                </ol>
            </div>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal7">Cek status pembayaran</button>
      </div>
    </div>
  </div>
</div>

<!--Modal 8 succes-->
    <div class="modal fade" id="modal7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Status pembayaran</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="payment-success" > 
              <div class="payment-success-img">
                <img src="/frontend/images/succes.png" alt="" width="70px" height="70px">
                <p style="margin-top: 10px;">Pembayaran berhasil</p>
              </div>
              <div class="payment-success-title">
                <p>Informasi mengenai tiket dan detail order dapat dilihat pada menu history</p>
              </div>
                <div class="payment-success-desc"> 
                  <p>Jika mengalami kesulitan mengenai pesanan Anda, harap hubungi:</p>
                  <p style="margin-top: -10px">kevents@gmail.com</p>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
            <button type="button" class="btn btn-primary">Understood</button>
          </div>
        </div>
      </div>
    </div>
@endsection