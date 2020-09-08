@extends('layoutmaster')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
        <h2>Laravel 6 Mochammad Fazhri Akbari</h2>
        </div>
         <div class="pull-right">
    <a href="#" class="btn btn-success">Add Product</a>
</div>
</div>
        <table class="table table-bordered">
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Detail</th>
        <th>Action</th>
     </tr>
     <tr>
        <td>1</td>
        <td>Baju Muslim</td>
        <td>Ini Baju Muslim</td>
        <td>
            <a href="#" class="btn btn-primary">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>
    </td>
    </tr>
    </table>
    </div>
@endsection