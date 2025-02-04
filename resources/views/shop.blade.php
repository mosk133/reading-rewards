@extends('layouts.master')

@section('content')
<section id="best-selling-items" class="position-relative padding-medium ">
    <div class="container">
      <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
        <h3 class="d-flex align-items-center">Libros más leídos</h3>
        <a href="index.html" class="btn">Ver más</a>
      </div>
      <div class="position-absolute top-50 end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next product-slider-button-next">
        <svg class="chevron-forward-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
          <use xlink:href="#alt-arrow-right-outline"></use>
        </svg>
      </div>
      <div class="position-absolute top-50 start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev product-slider-button-prev">
        <svg class="chevron-back-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
          <use xlink:href="#alt-arrow-left-outline"></use>
        </svg>
      </div>
      <div class="swiper product-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <div class="position-absolute">
                <p class="bg-primary py-1 px-3 fs-6 text-white rounded-2">Oferta 10%</p>
              </div>
              <img src="books/laurel_indias.jpg" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">A la sombra de un laurel de Indias</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Jesús Nadador</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>
              <span class="price text-primary fw-bold mb-2 fs-5">21,75 € - 430 R-Coins</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <a href="/cart" class="btn btn-brown">
                    <span>
                      <svg class="cart">
                        <use xlink:href="#cart"></use>
                      </svg>
                    </span>
                </a>
                <a href="/cart" class="btn btn-brown">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <img src="books/nietos.jpg" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">Los nietos</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Ángel Fernández</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>

              <span class="price text-primary fw-bold mb-2 fs-5">22,69 € - 460 R-Coins</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-brown" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-brown">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <img src="books/lista_juez.jpg" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">La lista del juez</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">John Grisham Asher</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>

              <span class="price text-primary fw-bold mb-2 fs-5">15,95 € - 325 R-Coins</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-brown" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-brown">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <div class="position-absolute">
                <p class="bg-primary py-1 px-3 fs-6 text-white rounded-2">Oferta 20%</p>
              </div>
              <img src="books/grieta_silencio.jpg" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">La grieta del silencio</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Javier Castillo Malaga</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>

              <span class="price text-primary fw-bold mb-2 fs-5">19,68 € - 385 R-Coins</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-brown" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-brown">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <img src="books/vinedo_luna.jpg" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">El Viñedo de la luna</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Carla Montero Manglado</p>

                <div class="rating text-warning d-flex align-items-center d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>

              <span class="price text-primary fw-bold mb-2 fs-5">21,75 € - 430 R-Coins</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-brown" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-brown">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <img src="books/cuco_cristal.jpg" class="img-fluid shadow-sm" alt="El cuco de cristal">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">El cuco de cristal</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Javier Castillo Malaga</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>

              <span class="price text-primary fw-bold mb-2 fs-5">22,65 € - 455 R-Coins</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-brown" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-brown">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <img src="books/ley_pueblo.jpg" class="img-fluid shadow-sm" alt="El cuco de cristal">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">La ley del pueblo</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Roberto H.l. Cagiao</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>

              <span class="price text-primary fw-bold mb-2 fs-5">9,95 € - 212 R-Coins</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-brown" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-brown">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
@endsection
