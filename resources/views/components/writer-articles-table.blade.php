<div class="container col-12 table">
    <div class="row">
      <div class="col-12">
        <table class="bg-dark opacity table btnMobile table-striped  border text-white">
          <thead class="table-success">
            <tr>
              <th  scope="col">#</th>
              <th  scope="col">Titolo</th>
              <th  scope="col">Sottotitolo</th>
              <th  scope="col">Categoria</th>
              <th  scope="col">Tags</th>
              <th  scope="col">Creato il</th>
              <th  scope="col">Azioni</th>
            </tr>
          </thead>
          <tbody>
                @foreach ($articles as $article)
                <tr>
                    <th class="text-white" scope="row">{{$article->id}}</th>
                    <td class="text-white">{{$article->title}}</td>
                    <td class="text-white">{{$article->subtitlel}}</td>
                    <td class="text-white">{{$article->category->name ?? 'Non categorizzato'}}</td>
                    <td>
                            @foreach($article->tags as $tag)
                                {{$tag->name}},
                            @endforeach
                        </td>
                        <td>{{$article->created_at->format(d/m/Y)}} </td>
                        </td>
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white">Leggi l'articolo</a>
                            <a href="{{route('article.edit', compact('article'))}}" class="btn btn-info text-white">Modifica l'articolo</a>
                            <form action="" method="" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-danger">Elimina articolo</button>
                            </form>
                        </td>
                </tr>
                @endforeach
          </tbody>
        </table>
                
      </div>
    </div>
  </div>
        