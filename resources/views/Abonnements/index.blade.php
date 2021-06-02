@extends('admin.index')
 
@section('content')
<br>
<br>
<div class="container">

<div align="center">
<font    color="#bf4040" > <h1> ** Gestion des Abonnements  ** </h1> </font>
</div>
<br>
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
               
                <font size="5" color="#4d1919">Vérifiez toutes les  Abonnements : </font>
            </div>
            <br>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('abonnements.create') }}">  Créer un nouvel Abonnement </a>
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
            <th style="text-align:center">  Durée</th>
            <th style="text-align:center"> Montant</th>
            <th style="text-align:center"> Image</th>
           
          
            <th width="150px" style="text-align:center">Action</th>
        </tr>
        @foreach ($abonnements as $abonnement)
        <tr>
            <td style="text-align:center">{{ ++$i }}</td>
            <td style="text-align:center">{{ $abonnement->duree}}</td>
            <td style="text-align:center">{{ $abonnement->montant}} DT</td>
            <td style="text-align:center"><img src="{{asset('images')}}/{{ $abonnement->image}}"  style="  border-radius: 10px;"width="150px;" height="70px;"/></td>
           
           
            <td>
                <form action="{{ route('abonnements.destroy',$abonnement->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('abonnements.show',$abonnement->id) }}"><i class="far fa-eye"></i></a>
    
                    <a class="btn btn-warning" href="{{ route('abonnements.edit',$abonnement->id) }}"><i class="far fa-edit"></i></a>
                    
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $abonnements->links() !!}
    </div>
    <br>
    <br>
@endsection
