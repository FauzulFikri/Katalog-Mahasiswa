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
                  <li class="nav-item">
                    <!-- <a class="nav-link text-white" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Find Talent</a> -->
                    <a class="nav-link active text-white" href="#">Kategori talent</a>
                  
                  </li>
                </ul>
                <div class="p-4">
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
                            <form class="row g-3">
                                <div class="mb-3">
                                    <label for="Nama" class="form-label">Nama Mahasiswa</label>
                                    <input type="text" class="form-control" id="Nama">
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
                  <button type="button" class="btn btn-primary">Send message</button>
                </div>
              </div>
            </div>
          </div>
            <div class="position-relative" style="height: 800px">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#472183" fill-opacity="1" d="M0,256L34.3,261.3C68.6,267,137,277,206,250.7C274.3,224,343,160,411,154.7C480,149,549,203,617,218.7C685.7,235,754,213,823,186.7C891.4,160,960,128,1029,101.3C1097.1,75,1166,53,1234,53.3C1302.9,53,1371,75,1406,85.3L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
                <div class="container position-absolute top-0 end-0">
                    <div class="row">
                        <div  class="col">
                        <div class="card" style="width: 50rem;"> 
                            <div class="card-body">
                                <h1><b>Kategori talent</b></h1>
                                  <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                         komputer jaringan
                                        </button>
                                      </h2>
                                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                  <div class="card">
                                                    <div class="card-body">
                                                      <h5 class="card-title">web development</h5>
                                                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                      <a href="#" class="btn btn-primary">Go somewhere</a>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="card">
                                                    <div class="card-body">
                                                      <h5 class="card-title">web development</h5>
                                                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                      <a href="#" class="btn btn-primary">Go somewhere</a>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="card">
                                                      <div class="card-body">
                                                        <h5 class="card-title">web development</h5>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                    <div class="card">
                                                      <div class="card-body">
                                                        <h5 class="card-title">web development</h5>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                    <div class="card">
                                                      <div class="card-body">
                                                        <h5 class="card-title">web development</h5>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                    <div class="card">
                                                      <div class="card-body">
                                                        <h5 class="card-title">web development</h5>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                              </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            komputer jaringan
                                        </button>
                                      </h2>
                                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                  <div class="card">
                                                    <div class="card-body">
                                                      <h5 class="card-title">web development</h5>
                                                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                      <a href="#" class="btn btn-primary">Go somewhere</a>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="card">
                                                    <div class="card-body">
                                                      <h5 class="card-title">web development</h5>
                                                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                      <a href="#" class="btn btn-primary">Go somewhere</a>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="card">
                                                      <div class="card-body">
                                                        <h5 class="card-title">web development</h5>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                    <div class="card">
                                                      <div class="card-body">
                                                        <h5 class="card-title">web development</h5>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                    <div class="card">
                                                      <div class="card-body">
                                                        <h5 class="card-title">web development</h5>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                    <div class="card">
                                                      <div class="card-body">
                                                        <h5 class="card-title">web development</h5>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                              </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            komputer jaringan
                                        </button>
                                      </h2>
                                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body"> 
                                            <div class="row">
                                            <div class="col-sm-6">
                                              <div class="card">
                                                <div class="card-body">
                                                  <h5 class="card-title">web development</h5>
                                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="card">
                                                <div class="card-body">
                                                  <h5 class="card-title">web development</h5>
                                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <h5 class="card-title">web development</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <h5 class="card-title">web development</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <h5 class="card-title">web development</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <h5 class="card-title">web development</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                    </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingFour">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                           komputer jaringan
                                          </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                          <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                  <div class="card">
                                                    <div class="card-body">
                                                      <h5 class="card-title">web development</h5>
                                                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                      <a href="#" class="btn btn-primary">Go somewhere</a>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="card">
                                                    <div class="card-body">
                                                      <h5 class="card-title">web development</h5>
                                                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                      <a href="#" class="btn btn-primary">Go somewhere</a>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="card">
                                                      <div class="card-body">
                                                        <h5 class="card-title">web development</h5>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                    <div class="card">
                                                      <div class="card-body">
                                                        <h5 class="card-title">web development</h5>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                    <div class="card">
                                                      <div class="card-body">
                                                        <h5 class="card-title">web development</h5>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                    <div class="card">
                                                      <div class="card-body">
                                                        <h5 class="card-title">web development</h5>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                              </div>
                                        </div>
                                        </div>
                                      </div>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingFive">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                              komputer jaringan
                                          </button>
                                        </h2>
                                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                          <div class="accordion-body"> <div class="row">
                                            <div class="col-sm-6">
                                              <div class="card">
                                                <div class="card-body">
                                                  <h5 class="card-title">web development</h5>
                                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="card">
                                                <div class="card-body">
                                                  <h5 class="card-title">web development</h5>
                                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <h5 class="card-title">web development</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <h5 class="card-title">web development</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <h5 class="card-title">web development</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <h5 class="card-title">web development</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                    </div>
                                        </div>
                                      </div>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingSix">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                              komputer jaringan
                                          </button>
                                        </h2>
                                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                          <div class="accordion-body"> <div class="row">
                                            <div class="col-sm-6">
                                              <div class="card">
                                                <div class="card-body">
                                                  <h5 class="card-title">web development</h5>
                                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="card">
                                                <div class="card-body">
                                                  <h5 class="card-title">web development</h5>
                                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <h5 class="card-title">web development</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <h5 class="card-title">web development</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <h5 class="card-title">web development</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <h5 class="card-title">web development</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                    </div>
                                        </div>
                                      </div>
                                  </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card" style="width: 18rem;">
                            <div class="card-body text-center">
                                <h2 style="font-family: Prata;"><b> Selamat Datang di Talent UNP</b></h2>
                                <img src="{{ asset('img/hu.JPG') }}"  class="img-fluid rounded-circle" width="200px"
                                height="200px" alt="">
                                <br>
                                <h3 style="font-family: Prata;">Hallo admin </h3>
                                <h4 style="font-family: Prata;">Have a Nice Day</h4>
                            </div>
                          </div>
                        </div>
                    </div>
                </div> 
                </div>

            <br><br><br>
            <br><br><br>
            <br><br>  
           
            <br>
        
        <div class="container"> 
         
          <div class="card text-start " style="background-color: #4E31AA; box-shadow: 15px 15px 15px rgba(0, 0, 0, 0.504);">
            <div class="row">
              <div class="col-sm-6 col-md-6 p-5 text-white">
                  <h1 style="font-family: Prata;"> Work the Way <br> You Want </h1>
                  
                  <p >
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cupiditate eos porro a, 
                    unde corrupti fuga ea eum vero, saepe nemo accusamus nesciunt tempora! Aut ducimus porro perferendis id hic!
                  </p>
              </div>
              <div class="col-md-6">
                <div class="card w-300px">
                  <img src="{{ asset('img/5.jpg') }}" alt="...">
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>

        
       <br><br>  
      <br>
      <br>
       
<br>

<br><br>

      <div class="container">
              <hr style="height: 10px; background-color: black;">
              <h5>Copyright &copy; Talent UNP</h5>
              <br>
      </div>
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