<x-layout>
  <x-header>

    
      <span class="text-light">Healthy</span>Earth
    

  </x-header>
  
    @if(session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif
{{-- 
  <div class="container">  BOTTONE INSERISCI ARTICOLO IN HOMEPGAE
    <div class="row justify-content-center m-4">
       <div class="col-12 text-center">
           <a href="{{route('article.create')}}" type="submit" class="btn btn-success">Inserisci il tuo articolo</a>
       </div>
    </div>
  </div> --}}

  {{-- <div class="container my-5">  CARD VECCHIA
    <div class="row justify-content-around">
        @foreach($articles as $article)
        <div class="col-12 col-md-6 mt-4">
            <div class="card shadow">
                <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">{{$article->title}}</h5>
                  <p class="card-text">{{$article->subtitle}}</p>
                  <p class="small text-muted fst-italic text-capitalize">
                    <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>
                </p>
                </div>
                <div class="card-footer text-muted d-flex justify-content-center align-items-center">
                    Redatto il {{$article->created_at->format('d/m/Y')}} da  <a href="{{route('article.byUser', ['user' => $article->user->id])}}" class="small text-muted fst-italic text-capitalize m-2">{{$article->user->name}}</a>
                    <a href="{{route('article.show', compact('article'))}}" class="ms-5 btn btn-success text-white">Leggi</a> 
                </div>

            </div>            
        </div>
        @endforeach
    </div>
</div> --}}


<div class="container my-4">
  <div class="row justify-content-around">

      @foreach($articles as $article)

          <div class="col-12 col-md-6 mt-3">
              <div class="caption">

                  <img src="{{Storage::url($article->image)}}" alt="" class="img-custom"/>
                  <span>
                      <p class="card-text fst-italic text-capitalize">

                        @if($article->category)
                          <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="text-light">{{$article->category->name}}</a>
                        @else
                          <p class="small text-muted fst-italic text-capitalize">
                            Non categorizzato
                          </p>
                        @endif

                      </p>
                      <h5 class="card-title">{{$article->title}}</h5>
                      <p class="card-text">{{$article->subtitle}}</p>

                      <p class="small fst_italic text-capitalize">

                        @foreach($article->tags as $tag)
                        #{{$tag->name}}
                        @endforeach
                        
                      </p>

                      <div class="d-flex justify-content-between">
                          <div class="d-flex justify-content-start">
                              <div>
                              Redatto il {{$article->created_at->format('d/m/Y')}} da 
                              </div>
                              <div> 
                              <a href="{{route('article.byUser', ['user' => $article->user->id])}}" class="small text-light fst-italic text-capitalize m-2">{{$article->user->name}}</a>
                              </div>
                          </div>
                          <div class="">
                          <a href="{{route('article.show', compact('article'))}}" class="ms-5 btn rounded-0 background-accent text-white back">Leggi</a>
                          </div>
                      </div>
                  </span>
              </div>                          
          </div>
  
      @endforeach
      
  </div>
</div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/media/carro-sello1.jpg" class="d-block w-100" alt="foto di switch">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>First slide label</h5>
                          <p>Some representative placeholder content for the first slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="/media/spiaggina.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Second slide label</h5>
                          <p>Some representative placeholder content for the second slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="/media/maremare.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Third slide label</h5>
                          <p>Some representative placeholder content for the third slide.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

            </div>
        </div>
    </div>



   

    <div class="container mt-5 mb-4">
      <div class="row">
        <div class="col-12 col-md-4 mb-3 ">
          <div class="card">
            <img src="/media/palazzoverde.jpg" class="card-img-top" alt="...">
            <a href=""></a>
          </div>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <div class="card">
            <img src="/media/energia.jpg" class="card-img-top" alt="...">
          </div>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <div class="card">
            <img src="/media/inquinamento-ambientale.jpg" class="card-img-top" alt="...">
          </div>
        </div>
      

      
        <div class="col-12 col-md-4 mb-3">
          <div class="card">
            <img src="/media/eco-consigli.jpg" class="card-img-top" alt="...">
          </div>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <div class="card">
            <img src="/media/economia-circolare.jpg" class="card-img-top" alt="...">
          </div>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <div class="card">
            <img src="/media/curiosita.jpg" class="card-img-top" alt="...">
          </div>
        </div>
      </div>
    </div>

</x-layout>
                



