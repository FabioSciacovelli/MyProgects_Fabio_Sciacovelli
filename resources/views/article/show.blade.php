<x-layout>
    <x-header>
        <span class="otherstitle">{{$article->title}}</span>
    </x-header>
   

    <div class="container mt-4">
        <div class="row justify-content-around">
            
            <div class="col-12 col-md-6 mt-4">
                <img src="{{Storage::url($article->image)}}" class="img-fluid my-3" alt="">              
            </div>

            <div class="col-12 col-md-6 mt-4">
                <div class="text-center">
                    <h2>{{$article->subtitle}}</h2>
                    <div class="my-3 text-muted fst-italic">
                      <p>Redatto da {{$article->user->name}} il {{$article->created_at->format('d/m/Y')}} </p>
                      <hr>
                    </div> 
                
                  
                  <p class="giusto">{{$article->body}}</p>
                  
                </div>
            </div>
                
        </div>

        <div class="row justify-content-around mb-5">
            <div class="col-12 text-center mt-5">
                <a href="{{route ('article.index')}}" class="btn btn-success text-white">Torna indietro</a>
            </div>
        </div>               
    </div>
    <div class="row justify-content-center mb-5">
        <div class="col-12 text-center mt-5">
            @if(Auth::user()&& Auth::user()->is_revisor)
            <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-success text-white my-5">Accetta Articolo</a>
            <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-danger text-white my-5">Rifiuta Articolo</a>
            @endif
        </div>
    </div>
            
</x-layout>
