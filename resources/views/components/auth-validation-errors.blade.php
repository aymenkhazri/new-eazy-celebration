@props(['errors'])



@if ($message = Session::get('status'))
   <div class="font-medium text-red-600"> 
        {{ $message }}
        </div>
        

        @elseif($errors->any())


    <div {{ $attributes }}>
        <div class="font-medium text-red-600">
            {{ __('Oups! Un problème est survenu.') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
      
                <li>{{  __('Ces informations  identification ne correspondent pas à nos enregistrements')  }}</li>
     
        </ul>
    </div>
@endif
