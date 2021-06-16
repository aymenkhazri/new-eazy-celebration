<div class="favorite-list-item">
    <div data-id="{{ $user->id }}" data-action="0" class="avatar av-m" >
    <img src="{{asset('images')}}/{{ $user->avatar }}" style=" border-radius:40%; " height="40px;" width="40px;"></span> 
    </div>
    <p>{{ strlen($user->name) > 5 ? substr($user->name,0,6).'..' : $user->name }}</p>
</div>