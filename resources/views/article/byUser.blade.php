<x-layout>
    <x-header>
        <span class="otherstitle">{{$user->name}}</span>
    </x-header>

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


    {{-- <div class="container my-5">
        <div class="row justify-content-around">
            @foreach($articles as $article)
            <div class="col-12 col-md-5 mt-4">
                <div class="card">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <p class="card-text">{{$article->subtitle}}</p>
                      <p class="small text-muted fst-italic text-capitalize">
                        <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>
                      </p>
                    </div>
                    <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                        Redatto il {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}}
                        <a href="{{route('article.show', compact('article'))}}" class="btn btn-success text-white">Leggi</a>
                    </div>
                </div>            
            </div>
            @endforeach
        </div>
    </div> --}}

</x-layout>