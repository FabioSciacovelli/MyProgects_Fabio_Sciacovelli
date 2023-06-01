<table class="bg-dark opacity table btnMobile table-striped  border text-white">
    <thead class="table-success text-center">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Sottotitolo</th>
        <th scope="col">Redattore</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <th class="text-white" scope="row">{{$article->id}}</th>
            <td class="text-white" >{{$article->title}}</td>
            <td class="text-white">{{$article->subtitle}}</td>
            <td class="text-white">{{$article->user->name}}</td>
            <td class="text-white">

                @if(is_null($article->is_accepted))
                <a type="submit" href="{{route('article.show', compact('article'))}}" class="btn back rounded-0 ">Leggi</a>
                @else
                <a type="submit" href="{{route('revisor.undoArticle', compact('article'))}}" class="btn btnMobile back rounded-0">Riporta in revisione</a>
                @endif
              
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>