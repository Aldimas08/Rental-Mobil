@extends('layouts.template')
@section('title')
Kategori
@endsection

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $kategori)
            <tr>
                <th scope="row">{{ $kategori->id }}</th>
                <td>{{ $kategori->nama_kategori }}</td>
                <td>
                    <button class="corner-button"><i class="fa fa-pencil"></i>Edit</button>
                    <button class="corner-button bg-danger text-white"><i class="fa fa-trash-o"></i>Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <td>
        <button class="corner-button bg-success text-white"><i class="fa fa-plus p-2" style="font-size:20px"></i>Tambahkan</button>
    </td>
</div>
@endsection
