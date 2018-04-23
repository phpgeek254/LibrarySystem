<div class="card">
    <div class="image">

    </div>
    <a href="{{ route('categories.show', ['id' => $category->id]) }}">
        <div class="card-image"
             style="height: 200px;
                     background-image: url('{{count($category->images) > 0 ? $category->images[0]->url : "images/logo.png"}}');
                     background-size: cover;
                     background-repeat: no-repeat;
                     background-position: center center;">

                                          <span class="card-title green center" style="padding: 5px; width: 100%; opacity: .7"> {{ $category->name }}
                                              <span class="badge orange white-text">
                                                 {{ count($category->books) }} Books Available
                                            </span>

                                      </span>
        </div>
    </a>
        <div class="card-action center">
            @include('components.admin_options', ['object' => $category, 'object_name' => 'Category'])
        </div>
</div>
@include('forms.forms', ['object' => $category, 'object_name' => 'Category'])
