@extends('layouts.app')

@section('content')
<div class="container">
    @role('superAdmin')
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-primary text-right" type="submit">Add</button>
            </div>
        </div>
    @endrole

    <br>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>
            <a href="#">Edit</a>
            @hasanyrole('superAdmin|hrManager')
                <a href="#">Delete</a>
            @endhasanyrole
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>
            <a href="#">Edit</a>
            @hasanyrole('superAdmin|hrManager')
                <a href="#">Delete</a>
            @endhasanyrole
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
          <td>
            <a href="#">Edit</a>
            @hasanyrole('superAdmin|hrManager')
                <a href="#">Delete</a>
            @endhasanyrole
          </td>
        </tr>
      </tbody>
    </table>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
