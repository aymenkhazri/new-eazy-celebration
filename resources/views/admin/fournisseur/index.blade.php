@extends('admin.index')
 
@section('content')
<br>
<br>
<div class="container-fluid">

<div align="center">
<font    color="#bf4040" > <h1> ** Vérifiez toutes les Fournisseurs  ** </h1> </font>
</div>
<br>
<br>
   
   
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <br>
  
   
    <table class="table table-bordered"  >
        <tr class="thead-dark">
            <th style="text-align:center">N</th>
            <th style="text-align:center">Image</th>
            <th style="text-align:center"> Nom</th>
            <th style="text-align:center"> Prenom</th>
            <th style="text-align:center"> Email</th>
            <th style="text-align:center">Date naissance</th>
            <th style="text-align:center">Genre</th>
            <th style="text-align:center">Adresse</th>
            <th style="text-align:center">Telephone</th>
            <th style="text-align:center">Type service</th>
            <th style="text-align:center">état statut</th>
          
            <th width="105px" style="text-align:center">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td style="text-align:center">{{ ++$i }}</td>
            <td style="text-align:center"><img src="{{asset('images')}}/{{ $user->avatar}}" width="70px;" height="60px;"  style=" border-radius:50%"/></td>
            <td style="text-align:center">{{ $user->name}}</td>
            <td style="text-align:center">{{ $user->prenom}}</td>
            <td style="text-align:center">{{ $user->email}}</td>
            <td style="text-align:center">{{ $user->date_naissance}}</td>
            <td style="text-align:center">{{ $user->genre}}</td>
            <td style="text-align:center">{{ $user->adresse}}</td>
            <td style="text-align:center">{{ $user->telephone}}</td>
            <td style="text-align:center">{{ $user->type_service_id}}</td>
            <td style="text-align:center">
            @if( $user->isban=='0')
           <label style=" border-radius:30%" class="btn py-1 btn-primary">Pas banni</label>
            @elseif($user->isban=='1')
            <label style=" border-radius:30%" class="btn py-1 btn-danger"> Banni</label>
            @endif
            </td>
            
           
            <td>
                <form action="{{ route('fournisseurs.destroy',$user->id) }}" method="POST">
   
                <a class="btn btn-primary" href="{{ route('fournisseurs.show',$user->id) }}"><i class="far fa-eye"></i></a>
                    
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                </form>
               
            </td>
        </tr>
        @endforeach
    </table>
    {!! $users->links() !!}

    </div>
    <br>
    <br>
    
@endsection
