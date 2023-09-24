@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h1>Le nostre Categorie</h1>
                    </div>
                    <div>
                        <a href="{{route('admin.categories.create')}}" class="btn btn-sm btn-primary">Aggiungi Categoria</a>
                    </div>

                </div>
            </div>
            </div>
            <div class="col-12 mt-5">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NAME</th>
                            <th>SLUG</th>
                            <th>STRUMENTI</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $cat)
                            <tr>
                                <td>{{$cat->name}}</td>
                                <td>{{$cat->slug}}</td>
                               
                                <td>
                                    <a href="{{route('admin.categories.show',$cat->id)}}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{route('admin.categories.edit',$cat->id)}}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{route('admin.categories.destroy',$cat->id)}}" onsubmit="return confirm('sei sicuro di voler cancellare la categoria?')" method="POST" class="d-inline-block">
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