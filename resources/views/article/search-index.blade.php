<x-layout>
    <x-header>
        <span class="otherstitle">TUTTI GLI ARTICOLI PER: {{$query}}</span>
    </x-header>
   

    {{-- <div class="container my-5">
        <div class="row justify-content-around">

            @foreach($articles as $article)
            <div class="col-12 col-md-5 mt-4">
                <div class="card rounded-0 border border-1">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top rounded-0" alt="">
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
            
        </div> --}}

        {{-- CARD DA PROVARE PER AVERE IL TESTO SULL' IMG.
            <div class="card text-bg-dark">
            <img src="/media/economia-circolare.jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
          </div>
        --}}






            {{-- PENULTIMO TENTATIVO
            <div class="container my-5">
                <div class="row justify-content-around">
        
                    @foreach($articles as $article)

                        <div class="col-12 col-md-5 mt-4">
                            <div class="card rounded-0 text-bg-dark border border-0">
                                <img src="{{Storage::url($article->image)}}" class="card-img rounded-0" alt="...">
                                <div class="card-img-overlay d-flex justify-content-end flex-column">
                                    <p class="card-text small text-muted fst-italic text-capitalize">
                                        <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>
                                    </p>
                                    <h5 class="card-title">{{$article->title}}</h5>
                                    <p class="card-text">{{$article->subtitle}}</p>
                                </div>
                                
                            </div>
                            <div class="card-footer text-bg-dark text-muted d-flex justify-content-center align-items-center">
                                Redatto il {{$article->created_at->format('d/m/Y')}} da  <a href="{{route('article.byUser', ['user' => $article->user->id])}}" class="small text-muted fst-italic text-capitalize m-2">{{$article->user->name}}</a>
                                <a href="{{route('article.show', compact('article'))}}" class="ms-5 btn btn-success text-white">Leggi</a>
                            </div>
                        </div>
                
                    @endforeach
                    
                </div>
            </div> --}}
  


            


            {{-- <div class="container my-5">
                <div class="row justify-content-around">
        
                    @foreach($articles as $article)

                        <div class="col-12 col-md-5 mt-4">
                            <div class="card rounded-0 text-bg-dark border border-0">

                                <img src="{{Storage::url($article->image)}}" class="card-img rounded-0" alt="...">
                                <div class="card-img-overlay d-flex align-items-end">
                                    <div class="card-footer text-bg-dark text-muted justify-content-center align-items-center opacity-75">
                                        <p class="card-text small text-muted fst-italic text-capitalize nopaco">
                                            <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize nopaco">{{$article->category->name}}</a>
                                        </p>
                                        <h5 class="card-title nopaco">{{$article->title}}</h5>
                                        <p class="card-text nopaco">{{$article->subtitle}}</p>
                                        Redatto il {{$article->created_at->format('d/m/Y')}} da  <a href="{{route('article.byUser', ['user' => $article->user->id])}}" class="small text-muted fst-italic text-capitalize m-2 nopaco">{{$article->user->name}}</a>
                                        <a href="{{route('article.show', compact('article'))}}" class="ms-5 btn btn-success text-white">Leggi</a>
                                    </div>
                                </div>
                                
                            </div>

                        </div>
                
                    @endforeach
                    
                </div>
            </div> --}}





            <div class="container my-5">
                <div class="row justify-content-around">
        
                    @foreach($articles as $article)

                        <div class="col-12 col-md-6 mt-4">
                            <div class="caption">

                                <img src="{{Storage::url($article->image)}}" alt="" class="img-custom"/>
                                <span>
                                   <p class="card-text fst-italic text-capitalize">
                                    <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="text-light">{{$article->category->name}}</a>
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


    <div class="container mb-5">
        <div class="row justify-content-end">
            <div class="col-12 col-md-2">
                <a href="{{route ('homepage')}}" class="btn back rounded-0  ">Torna indietro</a>
            </div>
        </div>
    </div>
</x-layout>
                