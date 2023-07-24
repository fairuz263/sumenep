@extends('layouts.app')

@section('content')
    <section
        class="hero"
        id="hero"
        style="
          background-repeat: no-repeat;
          background-size: cover;
          height: 50vh;
          background-image: url('https://www.google.com/url?sa=i&url=https%3A%2F%2Ftravel.kompas.com%2Fread%2F2022%2F10%2F04%2F071000827%2F7-tempat-wisata-sumenep-yang-populer-ada-desa-wisata-keris%3Fpage%3Dall&psig=AOvVaw1Pr28WEtXueOWHW2dQocRe&ust=1690261746046000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCMDqsunJpoADFQAAAAAdAAAAABAE');
        "
      >
        <div
          class="hero-content h-100 d-flex justify-content-center align-items-center flex-column"
        >
          <h1 class="text-center text-white display-4">Kontak Kami</h1>
          <p class="text-white">Kami butuh feedback untuk pelayanan yang lebih baik</p>
          <hr width="40" class="text-center" />
        </div>
      </section>

    <main class="container mb-5 position-relative" style="margin-top: -180px;z-index: 2;">
        <div class="row justify-content-center"> 
            <div class="col-lg-8"> 
                <div class="card p-4">

                  @if(session('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>{{ session('message') }}</strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif

                    <form method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea name="message" class="form-control" rows="5" id="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-contact">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection