@extends('admin.index')
   
@section('content')
<div class="container">
<br>
<br>  
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br>
<br>  

                <font size="5" color="#4d1919">Modifier Type de Evenement : </font>
                <br>
                <br>
                <br>
               
            </div>
            <br>
<br>  
            <div class="pull-right" align="right">
                <a class="btn btn-info" href="{{ route('categorie_evenements.index') }}"> Retour</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
        <strong>avertissement!</strong> Veuillez vérifier votre code d'entrée<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>
                <br>
    <form action="{{ route('categorie_evenements.update',$categorie_evenement->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
          
         <div class="">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Type Evenement  :</strong>
                    <input type="text" name="type_evenement" value="{{ $categorie_evenement->type_evenement}}" class="form-control" placeholder="type_evenement">
                </div>
            </div>

            <div class="">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description  :</strong>
                    <input type="textarea" name="description" value="{{ $categorie_evenement->description}}" class="form-control" placeholder="description">
                </div>
            </div>


            <div class="">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image :</strong>
                <input type="file" name="image" class="form-control" onchange="previewFile(this)"  >
                <br>
                <img id="previewImag" alt=" image" src="{{asset('images')}}/{{ $categorie_evenement->image}}" width="150px;" height="70px;"/>
            </div>
        </div>

            <br>
      <br>
      <br>
      <br>
      <br>
      <br>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="Reset" class="btn btn-danger">Annuler</button>
            </div>
        </div>
   
    </form>
    </div>
    <script>
function previewFile(input){
    var file=$("input[type=file]").get(0).file[0];
    if(file)
    {
            var reader =new FileReader() ;
            reader.onload=function(){
                $('#previewImag').attr("src",reader.result);
            }
            reader.readAsDataURL(file) ;  
    }

}
</script>
@endsection