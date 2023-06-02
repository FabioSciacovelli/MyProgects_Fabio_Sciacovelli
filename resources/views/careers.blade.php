<x-layout>
    <div class="bgLavoraconnoi">
        <div class="container mt-5">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-12">
    
                    <div class="container my-5 bg-dark opacity rounded-0 text-light">
                        <div class="row justify-content-center align-items-center border rounded p-2 shadow">
                            
                            <h1 class="text-light text-center otherstitle">
                                LAVORA CON NOI
                            </h1>

                            <div class="col-12 col-md-6">
                                <h2>Lavora come amministratore</h2>
                                <p>Cosa farai: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius consequatur unde odit voluptas molestiae? Molestiae at neque doloremque excepturi iste corporis quia ipsam, quaerat omnis nemo, fugiat deserunt dignissimos dolor.</p>
                                <h2>Lavora come revisore</h2>
                                <p>Cosa fare: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum officiis earum doloremque quidem officia libero rerum, quod nihil, neque necessitatibus voluptatibus iusto? Ducimus enim quod itaque sunt aperiam vero fugit.</p>
                                <h2>Lavora come redattore</h2>
                                <p>Cosa farai: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt beatae odio mollitia repudiandae facilis libero officiis omnis laudantium, dolore aut saepe repellat, molestiae eligendi. Culpa facilis sunt cum harum quod!</p>
                            </div>
                            <div class="col-12 col-md-6">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $errors)
                                            <li>{{ $errors }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                    <form class="p-5" action="{{ route ('careers.submit')}}" method="POST">
                                        @csrf

                                        <div class="mb-3">

                                        <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                                        <select name="role" id="role" class="form-control">
                                            <option value="">-- Scegli qui --</option>
                                            <option value="admin">Amministratore</option>
                                            <option value="revisor">Revisore</option>
                                            <option value="writer">Redattore</option>
                                        </select>

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input name="name" type="name" class="form-control" id="name" value="{{old('name') ?? Auth::user()->name}}">
                                    </div>
                                    

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input name="email" type="email" class="form-control" id="email" value="{{old('email') ?? Auth::user()->email}}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="message" class="form-label">Parlaci di te</label>
                                        <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{old('message')}}</textarea>
                                    </div>

                                    <div class="mt-2">
                                        <button type="submit" class="back rounded-0 btn btn-success">Invia</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


</x-layout>