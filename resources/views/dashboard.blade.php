
@extends('app')
<script src="{{ asset('js/boostrap.js') }}"></script>
<script src="{{ asset('js/axios.js') }}"></script>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/toastr.js') }}"></script>
<script src="{{ asset('js/vue.js') }}"></script>
@section('content')

    <div id="crud" class="row">
        <div class="col-xs-12">
            <h1 class="page-header">CRUD Laravel y VUEjs</h1>
        </div>
        <div class="col-sm-7">
            <a href="/resources/views/create.blade.php" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create">
                Nueva tarea
            </a>
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>ADDRESS</th>
                    <th>PHONE_NUMBER</th>
                    <th>CREATED_AT</th>
                    <th>UPDATE_AT</th>
                    <th colspan="2">
                        &nbsp;
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="keep in keeps">
                    <td width="10px">@{{ keep.id }}</td>
                    <td>@{{ keep.name }}</td>
                    <td>@{{ keep.address }}</td>
                    <td>@{{ keep.phone_number }}</td>
                    <td>@{{ keep.created_at }}</td>
                    <td>@{{ keep.updated_at }}</td>
                    <td width="10px">
                        <a href="#" class="btn btn-warning btn-sm">editar</a>
                    </td>
                    <td width="10px">
                        <a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deleteKeep(keep)">ELIMINAR</a>
                    </td>
                </tr>
                </tbody>

            </table>
@include('create')

        </div>
        <div class="col-sm-5">
		<pre>
			@{{ $data }}
		</pre>
        </div>
    </div>

@endsection
