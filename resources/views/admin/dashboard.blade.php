<x-layout>
    <x-header>
        <span class="otherstitle">
            Bentornato Amministratore
        </span> 
    </x-header>

    @if(session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif

    
    <div class="container my-5" >
        <div class="row justify-content-center">
            <div class="col-12 ">
                <h2 class="titletable text-center">Richieste per ruolo Amministratore</h2>
                <x-requests-table :roleRequests="$adminRequests" role="amministratore" />
            </div>
        </div>
    </div>

    <div class="container my-5" >
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="titletable text-center">Richieste per ruolo Revisore</h2>
                <x-requests-table :roleRequests="$revisorRequests" role="revisore" />
            </div>
        </div>
    </div>

    <div class="container my-5" >
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="titletable text-center">Richieste per ruolo Redattore</h2>
                <x-requests-table :roleRequests="$writerRequests" role="redattore" />
            </div>
        </div>
    </div>

    <hr>

    <div class="container my-5" >
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="titletable text-center">I tags della piattaforma</h2>
                <x-metainfo-table :metaInfos="$tags" metaType="tags" />
            </div>
        </div>
    </div>

    <hr>

    <div class="container my-5" >
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="titletable text-center">Le categorie della piattaforma</h2>
                <x-metainfo-table :metaInfos="$categories" metaType="categorie" />
                <form class="d-flex" action="{{route('admin.storeCategory')}}" method="POST">
                    @csrf 
                    <input type="text" name="name" class="form-control" placeholder="Inserisci una nuova categoria">
                    <button type="submit" class="btnMobile back rounded-0 btn btn-success text-white">Aggiungi</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>