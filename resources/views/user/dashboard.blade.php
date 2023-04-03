<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Talent UNP</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous">
            <link rel="stylesheet" href="style.css">
    </head>
    <body style="background-color: #F1F6F5;">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #472183;">
            <div class="container text-white">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <img style="height: 30px;" src="{{ asset('img/logounp.png') }}" alt="">
              <a class="navbar-brand text-white" href="#">Talent UNP</a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <div class="p-2">
                        <img style="height: 30px;"  class="rounded-circle" src="{{ asset('img/hu.JPG') }}" alt="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                </div>
                <a class="nav-link active text-white" aria-current="page" href="/login.html">Logout</a>
              </div>
            </div>
             </div>

          </nav>

          <div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="card p-sm-5">
                            <form class="row g-3" action="{{ route('user.update') }}" method="post" enctype="multipart/form-data">
                              @csrf
                              @method('put')
                                <div class="mb-3">
                                    <label for="Nama" class="form-label">Nama Mahasiswa</label>
                                    <input type="text" name="nama" id="nama" placeholder="Enter Nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                          @error('nama')
                              <p class="invalid-feedback">{{ $message }}</p>    
                          @enderror       
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Foto</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputGroupFile01">
                                    </div>
                                    </div>
                                <div class="mb-3">
                                    <label for="NIM" class="form-label">NIM</label>
                                    <input type="text" class="form-control" id="NIM">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat">
                                </div>
                                <div class="col-md-6">
                                    <label for="jurusan" class="form-label">Jurusan</label>
                                    <input type="text" class="form-control" id="jurusan">
                                </div>
                                <div class="col-md-6">
                                    <label for="tahunMasuk" class="form-label">Tahun Masuk</label>
                                    <input type="text" class="form-control" id="tahunMasuk">
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <select class="form-select" id="kategori">
                                        <option selected>Choose...</option>
                                        <option value="1">one</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                </div>
                                <div class="mb-3">
                                    <label for="talent" class="form-label">Talent</label>
                                    <select class="form-select" id="talent">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                </div>
                                <div class="mb-3">
                                    <label for="desk" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                  </div>
                                <div class="mb-3">
                                    <label for="noHp" class="form-label">Nomor Handphone</label>
                                    <input type="email" class="form-control" id="noHp">
                                </div>
                            </form>
                        </div>
                    </div>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <a href="{{ route('user.edit') }}" type="button" class="btn btn-primary" >Edit Profil</a>
                </div>
              </div>
            </div>
          </div>
           
                <div class="container-md p-5">
                  <div class="row g-4">
                    <div class="col-6 col-md-4">
                      <div class="card p-5 text-center" style="height: 300px;">
                        <div class="card-body ">
                            <img src="{{ asset('img/hu.JPG') }}"  class="img-fluid rounded-circle" width="200px"
                            height="200px" alt="">
                            <br>
                            <h3 style="font-family: Prata;">Hallo user </h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-8">
                          <div class="card " style="height: 300px;"> 
                              <div class="card-header">
                                <h2><b>About</b></h2>
                              </div>
                              <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text ">Lorem ipsum dolor sit amet consectetur adipisicing
                                   elit. Temporibus tempora perspiciatis eius quam consequatur est reprehenderit beatae, rem praesentium sint! Inventore nihil incidunt 
                                  consequuntur vitae odio accusantium consectetur assumenda? Ullam!
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                Et, repudiandae! Labore aliquam facilis aut est vero. Dignissimos dolore culpa repellendus. 
                                Iusto suscipit cumque modi aut atque quam error magnam expedita?</p>
                                </p>
                              </div>
                          </div>
                    </div>
                  </div>
                    
      
        <div class="container p-5"> 
         
          <div class="card text-start " style="background-color: #4E31AA; box-shadow: 15px 15px 15px rgba(0, 0, 0, 0.504);">
            <div class="row">
              <div class="col-sm-6 col-md-6 p-5 text-white">
                  <h1 style="font-family: Prata;"> Ayo Lengkapi<br> Data Kamu </h1>
                  
                  <p style="font-size: 15px;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cupiditate eos porro a, 
                    unde corrupti fuga ea eum vero, saepe nemo accusamus nesciunt tempora! Aut ducimus porro perferendis id hic!
                  </p>
                  <a href="" class="btn btn-primary">Isi data</a>
              </div>
              <div class="col-md-6">
                <div class="card" style="height: 400px;">
                  <img style="height: 400px;" src="{{ asset('img/2.jpg') }}" alt="...">
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>

<div style="background-color: #472183;">
  <div class="container p-3 text-white">
    <h5>Copyright &copy; Talent UNP</h5>
</div>
</div>
      
    

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
            integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
            crossorigin="anonymous"></script>
    </body>
</html>