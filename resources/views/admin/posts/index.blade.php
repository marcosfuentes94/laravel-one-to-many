@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h1>I Nostri Post</h1>
                    </div>
                    <div>
                        <a href="{{route('admin.posts.create')}}" class="btn btn-sm btn-primary">Aggiungi Post</a>
                    </div>

                </div>
            </div>
            </div>
            <div class="col-12 mt-5">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TITOLO</th>
                            <th>SLUG</th>
                            <th>Strumenti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->slug}}</td>
                                <td>
                                    <a href="{{route('admin.posts.show',$post->id)}}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{route('admin.posts.edit',$post->id)}}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{route('admin.posts.destroy',$post->id)}}" onsubmit="return confirm('sei sicuro di voler cancellare il post?')" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>


                </table>
            </div>
        </div>
    </div>
@endsection