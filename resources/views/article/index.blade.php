<x-layout>
    <x-header>
        <span class="otherstitle">TUTTI GLI ARTICOLI</span>
    </x-header>

            <div class="container my-5 min-vh-100">
                <div class="row justify-content-around">
        
                    @foreach($articles as $article)

                        <div class="col-12 col-md-6 mt-4">
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

                                    <hr>

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
                