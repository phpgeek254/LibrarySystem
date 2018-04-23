@extends(Auth::check() && Auth::user()->admin ? 'layouts.admin_master' : 'layouts.master')

@section('content')
    <div class="row center">
        <div class="col m6 s12">
            <h5 class="center">
               Your Profile
            </h5>

            <div class="userView center">
                <a href="{{ route('profile.index') }}" class="center">
                    {!! Html::image(asset($user->avatar ? $user->avatar : 'images/logo.png'),
             null, ['style'=>'width:200px; height: 200px;', 'class' => 'circle']) !!}
                </a>
                <br>
            @if (Auth::check() and Auth::id() == $user->id)
                <a class="waves-effect waves-light modal-trigger"
                   href="#upload_profile_{{ $user->id }}">
                <i class="material-icons">add_a_photo</i> 
                </a>
            @endif

            </div>
            <ul class="collection">
                <li class="collection-item">
                    Name : {{ $user->name }}
                </li>
                <li class="collection-item">
                    Email : {{ $user->email }}
                </li>
            </ul>
            <a class="btn-flat">
                 <i class="fab fa-pencil black-text"></i>
            </a>
            
        </div>
        <div class="col m6 s12">
        <h5 class="left-align">
           Your Posts
        </h5>
            <div class="divider"></div>
            <div class="row">
                <div class="col s12">
                    <a href="#create_post" class="btn-flat modal-trigger"> Add A Post</a>
                </div>
            </div>
            <ul class="collection">
            @forelse($user->posts as $post)
                @include('posts.list_item')
                    @include('components.save_image', ['object' => $post, 'object_name'=>'post'])
                @empty
                <h6 class="center"> You do not have any posts currently. </h6>
            @endforelse
            </ul>
        </div>
    </div>
    @include('forms.create', ['object_name' => 'Post', 'object' => $post])
@endsection