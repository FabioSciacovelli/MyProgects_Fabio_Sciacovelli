<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table btnMobile table-striped table-hover border">
                <thead class="table-success">
                    <th scope="col">#</th>
                    <th scope="col">Nome tag</th>
                    <th scope="col">Q.tà articoli collegati</th>
                    <th scope="col">Aggiorna</th>
                    <th scope="col">Cancella</th>      
                  </tr>
                </thead>
                <tbody>
            
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif  --}}
            
                    @foreach ($metaInfos as $metaInfo)
                    <tr>
                        <th scope="row">{{$metaInfo->id}}</th>
                        <td>{{$metaInfo->name}}</td>
                        <td>{{count($metaInfo->articles)}}</td>
                        @if($metaType == "tags")
                        <td>
                            <form action="{{route('admin.editTag', ['tag'=> $metaInfo])}}" method="POST">
                                @csrf
                                @method('put')
                                <input type="text" name="name" placeholder="New tag" class="btnMobile form-control w-50 d-inline">
                                <span><button type="submit" class="btn btnMobile back rounded-0 text-white">Aggiorna</button></span>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('admin.deleteTag',['tag' => $metaInfo])}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btnMobile rounded-0 btn-danger runded-0 text-white">Elimina</button>
                            </form>
                        </td>
                        @else
                        <td>
                            <form action="{{route('admin.editCategory', ['category' => $metaInfo])}}" method="POST">
                                @csrf
                                @method('put')
                                <input type="text" name="name" placeholder="Nuova categoria" class="btnMobile form-control w-50 d-inline">
                                <button type="submit" class="btn btnMobile back rounded-0 text-white">Aggiorna</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('admin.deleteCategory', ['category' => $metaInfo])}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btnMobile rounded-0 btn-danger runded-0 text-white">Elimina</button>
                            </form>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
                       
        </div>
    </div>    
</div> 