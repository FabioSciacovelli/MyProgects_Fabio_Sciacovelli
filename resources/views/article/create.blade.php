<x-layout>
    <div class="bgcreate">
        <div class="container mt-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-8">
           
                    <form class="bg-light p-5 border rounded-1 opacity mt-5 mb-5" action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
                        
                        <h1 class="text-blackcustom text-center titlecreate mb-5">
                            INSERISCI UN ARTICOLO
                        </h1>
                         
                        {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li> {{ $error }} </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif  --}}
                        @csrf

                        @if (session()->has('articleCreated'))
                            <div class="alert alert-success">
                                {{ session('articleCreated') }}
                            </div>
                        @endif

                        <div class="mb-3">
                            <label for="title" class="form-label fw-bold">Titolo</label>

                            <input type="text" name="title" class="form-control" id="title" placeholder="Min 5, max 40" value="{{old('title')}}">
                            
                            
                            @error('title')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="subtitle" class="form-label fw-bold">Sottotitolo</label>
                            <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Min 5, max 40" value="{{old('subtitle')}}">
                            @error('subtitle')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label fw-bold">Immagine</label>
                            <input type="file" name="image" class="form-control" id="image">
                            <span class="small fst-italic">Inserisci una immagine</span>
                            @error('image')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                                
                                <label for="category" class="form-label fw-bold">Categoria:</label>
                                <select  name="category"  class="form-control text-capitalize" id="category">
                                    <option value="">--Seleziona--</option>
    
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                    
                                </select> 
                                @error('category')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            
                            </div>


                        <div class="mb-3">
                            <label for="tags" class="form-label fw-bold">Tags:</label>
                            <input  name="tags" class="form-control" id="tags" value="{{old('tags')}}" placeholder="Dividi ogni tag con una virgola">
                        </div>

                        <div class="mb-3">
                            <label for="body" class="form-label fw-bold">Corpo del testo:</label>
                            <textarea  name="body"  rows="10" cols="30" class="form-control" id="body" placeholder="Il corpo del teste dev' essere tra i 10 e i 1000 caratteri">{{old('body')}}</textarea>
                            @error('body')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mt-2">
                            <button class="btn btn-success back text-white m-3 rounded-0">Inserisci un articolo</button>
                            <a class="btn oran rounded-0" href="{{route('homepage')}}">Torna alla home</a>
                        </div>
                        
                    </form>
                </div>

               
                  
            </div>
        </div>
    </div>
</x-layout>