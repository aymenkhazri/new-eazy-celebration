@extends('admin.index')
 
@section('content')
<br>
<br>
<div class="container">

<div align="center">
<font    color="#bf4040" > <h1> ** Gestion des superviseurs  ** </h1> </font>
</div>
<br>
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
               
                <font size="5" color="#4d1919">Vérifiez toutes les superviseurs : </font>
            </div>
            <br>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('superviseurs.create') }}">  Créer une nouvelle superviseur</a>
            </div>
        </div>
    </div>
   
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
       
          
            <th width="150px" style="text-align:center">Action</th>
        </tr>
        @foreach ($superviseurs as $superviseur)
        <tr>
            <td style="text-align:center">{{ ++$i }}</td>
            <td style="text-align:center">{{ $superviseur->name}}</td>
            <td style="text-align:center">{{ $superviseur->prenom}}</td>
            <td style="text-align:center">{{ $superviseur->email}}</td>
           
          
           
            <td>
                <form action="{{ route('superviseurs.destroy',$superviseur->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('superviseurs.show',$superviseur->id) }}"><i class="far fa-eye"></i></a>
    
                    <a class="btn btn-warning" href="{{ route('superviseurs.edit',$superviseur->id) }}"><i class="far fa-edit"></i></a>
                    
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $superviseurs->links() !!}
    </div>
    <br>
    <br>
@endsection
