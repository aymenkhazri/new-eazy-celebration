@extends('admin.index')
 
@section('content')

<div class="container-fluid">

<div align="center">
<font    color="#bf4040" > <h1> ** Vérifiez toutes les clients  ** </h1> </font>
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
            <th style="text-align:center"> Nom</th>
            <th style="text-align:center"> Prenom</th>
            <th style="text-align:center"> Email</th>
            <th style="text-align:center">Date de naissance</th>
            <th style="text-align:center">Genre</th>
            <th style="text-align:center">Adresse</th>
            <th style="text-align:center">Telephone</th>
            <th style="text-align:center">Image</th>

          
            <th width="100px" style="text-align:center">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td style="text-align:center">{{ ++$i }}</td>
            <td style="text-align:center">{{ $user->name}}</td>
            <td style="text-align:center">{{ $user->prenom}}</td>
            <td style="text-align:center">{{ $user->email}}</td>
            <td style="text-align:center">{{ $user->date_naissance}}</td>
            <td style="text-align:center">{{ $user->genre}}</td>
            <td style="text-align:center">{{ $user->adresse}}</td>
            <td style="text-align:center">{{ $user->telephone}}</td>
           <td style="text-align:center"><img src="{{asset('images')}}/{{ $user->avatar}}" width="70px;" height="70px;"/></td>
           
            <td>
                <form action="{{ url('/admin/clients/destroy',$user->id) }}" method="POST">
   

                   
                    
   
                    @csrf
              
      
                    <button type="submit" class="btn btn-danger">Supprimer</button>
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
