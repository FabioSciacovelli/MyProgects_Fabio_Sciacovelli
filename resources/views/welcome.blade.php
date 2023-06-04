<x-layout>

  <x-header>

    <span><span class="text-light">Healthy</span>Earth </span>
    
  </x-header>
  
  @if(session('message'))
  <div class="alert alert-success text-center">
    {{session('message')}}
  </div>
  @endif
  
  
  <div class="container my-4">
    <div class="row justify-content-around">

      <i>

        <h2 class="subtitle fs-4">GLI ULTIMI ARTICOLI</h2>
        <div class="line"></div>
        
      </i>
     
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
            <p class="small fst-italic text-white">Tempo di lettura: {{ $article->readDuration() }} min</p>
            
            
            
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



    <div class="container sezione_icone mt-5 ml-0 mr-0 mb-0 d-flex justify-content-between">
      <div class="row">
  
        <div class="col-6 col-md-2">           
          <div class="m-5 text-center">
            
            <i class="fa-solid fa-earth-europe fa-3x  text-accent d-flex justify-content-center"></i>
            <p class="text-align mt-3 d-flex justify-content-center text-accent">Ecosostenibilità</p>
          
          </div>
        </div>
  
  
        <div class="col-6 col-md-2">
          <div class="m-5 text-center">
            <i class="fa-solid fa-lightbulb fa-3x  text-accent d-flex justify-content-center"></i>
            <p class="text-align mt-3 text-accent   d-flex justify-content-center">Energia</p>
          </div>
        </div>
  
  
        <div class="col-6 col-md-2">
          <div class="m-5 text-center">
            <i class="fa-solid fa-smog fa-3x text-accent  d-flex justify-content-center"></i>
            <p class="text-align mt-3 d-flex text-accent  justify-content-center">Inquinamento ambientale</p>
          </div>
        </div>
  
  
        <div class="col-6 col-md-2">
          <div class="m-5 text-center">
            <i class="fa-solid fa-tree fa-3x text-accent  d-flex justify-content-center"></i>
            <p class="text-align mt-3 text-accent  d-flex justify-content-center">Eco consigli</p>
          </div>
        </div>
  
  
        <div class="col-6 col-md-2 d-flex justify-content-center">
          <div class="m-5 text-center">
            <i class="fa-solid fa-solar-panel fa-3x text-accent d-flex justify-content-center"></i>
            <p class="text-align mt-3 d-flex text-accent  justify-content-center">Risparmio energetico</p>
          </div>
        </div>
  
  
        <div class="col-6 col-md-2 d-flex justify-content-center">
          <div class="m-5 text-center">
            <i class="fa-solid fa-recycle fa-3x text-accent d-flex justify-content-center"></i>
            <p class="text-align mt-3 text-accent  d-flex justify-content-center">Economia circolare</p>
          </div>
        </div>  
  
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
                      <img src="/media/carosello3.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h2 class="background-blackcustom opacity">La deforestazione è un problema?</h2>
                        <p class="fs-5 background-blackcustom opacity">Le piante e gli alberi, mediante il processo di fotosintesi clorofilliana, trasformano l'anidride carbonica presente nell'atmosfera in ossigeno. Ne consegue che il disboscamento determina un aumento di CO2 e di conseguenza un acuirsi dell'effetto serra e del riscaldamento globale.</p>
                      </div>
                    </div>
                    <div class="carousel-item ">
                      <img src="/media/spiaggiaplastica.jpg" class="d-block w-100" alt="foto di switch">
                      <div class="carousel-caption d-none d-md-block">
                        <h2 class="background-blackcustom opacity">Inquinamento marino</h2>
                        <p class="fs-5 background-blackcustom opacity">Gli effetti dell'inquinamento marino sono molteplici, a partire dalla riduzione della fauna ittica e la perdita di biodiversità, fino all'estinzione di intere specie marine e la cancellazione di una serie di gruppi della catena alimentare.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="/media/vestitiusati1.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h2 class="background-blackcustom opacity">L'inquinamento dell'industria della moda</h2>
                        <p class="fs-5 background-blackcustom opacity">Secondo un rapporto delle Nazioni Unite, l'industria della moda produce dall'8% al 10% di tutte le emissioni globali di CO2, ovvero tra i 4 e 5 miliardi di tonnellate di anidride carbonica immesse in atmosfera ogni anno.</p>
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



 
</x-layout>
                



