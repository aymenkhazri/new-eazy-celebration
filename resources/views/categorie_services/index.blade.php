@extends('admin.index')
 
@section('content')
<br>
<br>
<div class="container">

<div align="center">
<font    color="#bf4040" > <h1> ** Gestion des categories ** </h1> </font>
</div>
<br>
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
               
                <font size="5" color="#4d1919">Vérifiez toutes les categories : </font>
            </div>
            <br>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categorie_services.create') }}">  Créer un nouveau service</a>
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
            <th style="text-align:center"> Type Service</th>
            <th style="text-align:center"> Description</th>
            <th style="text-align:center"> Image</th>
           
          
            <th width="275px" style="text-align:center">Action</th>
        </tr>
        @foreach ($categorie_services as $categorie_service)
        <tr>
            <td style="text-align:center">{{ ++$i }}</td>
            <td style="text-align:center">{{ $categorie_service->type_service}}</td>
            <td style="text-align:center">{{ $categorie_service->description}}</td>
            <td style="text-align:center"><img src="{{asset('images')}}/{{ $categorie_service->image}}" width="150px;" height="70px;"/></td>
           
           
            <td>
                <form action="{{ route('categorie_services.destroy',$categorie_service->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('categorie_services.show',$categorie_service->id) }}">Voir</a>
    
                    <a class="btn btn-warning" href="{{ route('categorie_services.edit',$categorie_service->id) }}">Modifier</a>
                    
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $categorie_services->links() !!}
    </div>
    <br>
    <br>
@endsection
