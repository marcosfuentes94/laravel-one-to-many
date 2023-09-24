@extends ('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center my-5">
                    <div>
                        <h1>{{$post->title}}</h1>
                    </div>
                    <div>
                        <a href="{{route('admin.posts.index')}}" class="btn btn-sm btn-primary">Tutti gli articoli</a>
                    </div>

                </div>
            </div>
            <div class="col-12">
                <img src="{{asset('storage/'.$post->cover_image)}}"  width="500px">
            </div>
            <div class="col-12">
                {{$post->category->name}}
            </div>
            <div class="col-12">
                <p>{{$post->content}}</p>
            </div>
        </div>
    </div>
@endsection