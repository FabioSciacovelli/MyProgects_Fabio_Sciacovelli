<div class="container col-12 table">
  <div class="row">
    <div class="col-12">
      <table class="bg-dark opacity table btnMobile table-striped  border text-white">
        <thead class="table-success">
          <tr>
            <th  scope="col">#</th>
            <th  scope="col">Nome</th>
            <th  scope="col">Email</th>
            <th  scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($roleRequests as $user)
            <tr>
                <th class="text-white" scope="row">{{$user->id}}</th>
                <td class="text-white">{{$user->name}}</td>
                <td class="text-white">{{$user->email}}</td>
               
                <td>
    
                  @switch($role)
                      @case('amministratore')
                          <a href="{{route('admin.setAdmin', compact('user'))}}" class="btn btn-success text-white">Attiva {{$role}}</a>
                          @break
                      @case('revisore')
                          <a href="{{route('admin.setRevisor', compact('user'))}}" class="btn btn-success text-white">Attiva {{$role}}</a>
                          @break
                      @case('redattore')
                          <a href="{{route('admin.setWriter', compact('user'))}}" class="btn btn-success text-white">Attiva {{$role}}</a>
                          @break
                  @endswitch
                  
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
              
    </div>
  </div>
</div>
      