{{-- untuk ngasitau letak file tujuan --}}
@extends('layouts.auth')

{{-- untuk memanggil isi dari yeild  --}}
@section('content')
    
  <div class="container-regis">
    <div class="back-link">
        <a href="{{ route('home')}}" class="back-link"> &lt; Back to Dashboard</a>
        <div class="logo">
            <img src="/frontend/images/image 102.png" width="40px" height="40px">
            <p> K-EVENTS </p>
        </div>
    </div>
    <div class="title"><b>Sign up</b>
    </div>
    <div class="direct">Already have account? 
      <p><a href="html_images.asp" style="text-decoration: none; color: #F25D9C;">Sign in</a></p>
    </div>
    <div class="content">
      <form action="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nama</span>
            <input type="text" required>
            <p style ="color:grey; font-size: 12px;">Nama depan</p>
          </div>
          <div class="input-box" style="margin-top: 28px;">
            <input type="text" required>
            <p style ="color:grey; font-size: 12px;">Nama belakang</p>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" required>
          </div>
          <div class="input-box">
            <span class="details">No HP</span>
            <input type="text" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" required>
          </div>
          <div class="input-box">
            <span class="details">Konfirmasi password</span>
            <input type="password"required>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" value="Sign Up">
        </div>
      </form>
    </div>
  </div>

@endsection

