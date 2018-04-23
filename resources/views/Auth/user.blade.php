<div class="card">
    <div class="card-content">
        <ul class="collection with-header">
            <div class="userView center">
                <a href="" class="center">
                    {!! Html::image(asset($user->avatar ? $user->avatar : 'images/logo.png'),
             null, ['style'=>'width:200px;', 'class' => 'circle']) !!}
                </a>
                <br>

            </div>
            <li class="collection-item">
                <h6>{{ $user->name }}</h6>
            </li>
            <li class="collection-item">
                <i class="fa fa-envelope"></i> {{ $user->email }}
            </li>

        </ul>
    </div>
        <div class="card-action center">
            @include('components.admin_options', ['object_name'=>'User', 'object'=>$user])
        </div>

</div>

@include('forms.forms', ['object_name'=>'User', 'object'=>$user])
