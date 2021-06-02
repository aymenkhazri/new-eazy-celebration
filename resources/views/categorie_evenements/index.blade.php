@extends('admin.index')
 
@section('content')
<br>
<br>
<div class="container">

<div align="center">
<font    color="#bf4040" > <h1> ** Gestion des evenements  ** </h1> </font>
</div>
<br>
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
               
                <font size="5" color="#4d1919">Vérifiez toutes les  evenements : </font>
            </div>
            <br>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categorie_evenements.create') }}">  Créer une nouvelle  evenement</a>
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
            <th style="text-align:center">  Evenement</th>
            <th style="text-align:center"> Description</th>
            <th style="text-align:center"> Image</th>
           
          
            <th width="150px" style="text-align:center">Action</th>
        </tr>
        @foreach ($categorie_evenements as $categorie_evenement)
        <tr>
            <td style="text-align:center">{{ ++$i }}</td>
            <td style="text-align:center">{{ $categorie_evenement->type_evenement}}</td>
            <td style="text-align:center">{{ $categorie_evenement->description}}</td>
            <td style="text-align:center"><img src="{{asset('images')}}/{{ $categorie_evenement->image}}"  style="  border-radius: 10px;"width="150px;" height="70px;"/></td>
           
           
            <td>
                <form action="{{ route('categorie_evenements.destroy',$categorie_evenement->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('categorie_evenements.show',$categorie_evenement->id) }}"><i class="far fa-eye"></i></a>
    
                    <a class="btn btn-warning" href="{{ route('categorie_evenements.edit',$categorie_evenement->id) }}"><i class="far fa-edit"></i></a>
                    
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $categorie_evenements->links() !!}
    </div>
    <br>
    <br>
@endsection
