<x-layout headerTitle="{{$article->title}}">
   

    <div class="container my-5">
        <div class="row justify-content-around">
            
            <div class="col-12 col-md-5 mt-4">
                <img src="{{Storage::url($article->image)}}" class="img-fluid my-3" alt="">
                <div class="text-center">
                  <h2>{{$article->subtitle}}</h2>
                  <div class="my-3 text-muted fst-italic">
                    <p>Redatto da {{$article->user->name}} il {{$article->created_at->format('d/m/Y')}} </p>
                  </div> 
                </div>
                <hr>
                <p> {{$article->body}} </p>
                <div class="text-center">
                    <a href="{{route ('article.index')}}" class="btn btn-success text-white">Torna indietro</a>
                </div>
            </div>
                
        </div>
                            
    </div>
            
</x-layout>
               