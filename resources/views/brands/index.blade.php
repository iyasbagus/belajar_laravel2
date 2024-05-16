@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p5">
                    <div class="card-header">{{ __('Data Brand') }}  <a href="{{ route('brand.create')}}" class="btn btn-primary btn-sm float-end">Add Data</a></div>
                    <div class="card-body">
                      
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name Brand</th>
                                    <th scope="col" style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach($brand as $data)
                                <tr>
                                    <th scope="row">{{$no++}}</th>
                                    <td>{{$data->name_brand}}</td>
                                    <form action="{{route('brand.destroy', $data->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <td class="text-end">
                                        <a href="{{route('brand.edit', $data->id)}}" class="btn btn-success btn-sm">Edit</a>
                                        <a href="{{route('brand.show', $data->id)}}" class="btn btn-warning btn-sm">Show</a>
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                     </form>
                                </tr>
                               
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
