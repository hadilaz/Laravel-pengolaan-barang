@extends('adminlte::page')

@section('title', 'User')

@section('content_header')
    <h1>Pengelolaan USER</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justifly-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body table-responsive" >
                        <button class="btn btn-primary" data-toggle="modal" data-target="#tambahUserModal"><i class="fa fa-plus"></i>Tambah Data</button>
                        <hr/>
                        <table id="table-data" class="table table-borderer">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAME</th>
                                    <th>USERNAME</th>
                                    <th>EMAIL</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="basic example">
                                                <button type="button" id="btn-edit-user" class="btn btn-success" data-toggle="modal" data-target="#editUserModal" data-id="{{ $user->id }}">Edit</button>
                                                <button type="button" id="btn-delete-user" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-id="{{ $user->id }}">Hapus</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop