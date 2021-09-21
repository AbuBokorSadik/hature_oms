@extends('app')

@section('contentWrapper')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Agent List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active">Agent List</li>
                    </ol>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4">
                    @include('alert.flashAlert')
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            {!! Form::open(['route' => 'agents.index', 'method' => 'get']) !!}
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('agentId', 'Id') !!}
                            {!! Form::text('id', old('id'), ['id' => 'agentId', 'placeholder' => 'Enter agent id...', 'class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('agentName', 'Name') !!}
                            {!! Form::text('name', old('name'), ['id' => 'agentName', 'placeholder' => 'Enter agent name...', 'class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('agentEmail', 'Email') !!}
                            {!! Form::text('email', old('email'), ['id' => 'agentEmail', 'placeholder' => 'Enter agent email...', 'class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('agentMobile', 'Mobile') !!}
                            {!! Form::text('mobile', old('mobile'), ['id' => 'agentEmail', 'placeholder' => 'Enter agent mobile...', 'class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            {!! Form::label('agentStatus', 'Status') !!}
                            {!! Form::select('status', [null => 'Select agent status...', '1' => 'Active', '0' => 'Inactive'], old('status'), ['class' => 'form-control', 'id' => 'agentStatus', ]) !!}
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            {!! Form::label('createdAtDateRange', 'Select Created At Date Range') !!}
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-clock"></i></span>
                                </div>
                                {!! Form::text('createdAtDateRange', old('createdAtDateRange'), ['id' => 'createdAtDateRange', 'class' => 'form-control float-right']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                {!! Form::submit('Search', ['class' => 'btn btn-success']) !!}
                {!! Form::submit('Clear Filter', ['class' => 'btn btn-secondary', 'id' => 'clear']) !!}
            </div>
            {!! Form::close() !!}
        </div>


        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Agent List</h3>
                <div class="card-tools">
                    {!! Form::open(['route' => 'agents.create', 'method' => 'get']) !!}
                    {!! Form::button('<i class="fas fa-plus"> Add Agent</i>', ['type'=>'submit', 'class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th>
                                Id
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Mobile
                            </th>
                            <th class="text-center">
                                Avater
                            </th>
                            <th class="text-center">
                                Status
                            </th>
                            <th>
                                Created Time
                            </th>
                            <th>
                                Updated Time
                            </th>
                            <th class="text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($agents as $agent)
                        <tr>
                            <td>
                                {{ $agent->id }}
                            </td>
                            <td>
                                {{ $agent->name }}
                            </td>
                            <td>
                                {{ $agent->email }}
                            </td>
                            <td>
                                {{ $agent->mobile }}
                            </td>
                            <td class="text-center">
                                @php
                                $imgpath = $agent->avater ? '/storage/' . $agent->avater : 'img/dummy-user.png';
                                @endphp
                                <img class="profile-user-img img-fluid img-circle" style="height: 45px; width: 45px;" src="{{ asset($imgpath) }}" alt="">
                            </td>
                            <td class="project-state">
                                <span class="badge badge-{{ ($agent->status) ? 'success' : 'danger' }}" style="width: 60px;">
                                    {{ ($agent->status) ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>
                                {{ $agent->created_at }}
                            </td>
                            <td>
                                {{ $agent->updated_at }}
                            </td>
                            <td class="text-center">

                                @php
                                $btnClass = $agent->status ? 'btn-danger' : 'btn-success'
                                @endphp
                                <div class="row">
                                    <div class="col-6">
                                        {!! Form::open(['route' => ['agents.update', $agent->id], 'method' => 'put']) !!}
                                        {!! Form::button(($agent->status) ? 'Inactive' : 'Active', ['type'=>'submit', 'class' => 'btn ' . $btnClass . ' btn-sm', 'style' => 'width:80px']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                    <div class="col-6">
                                        <a class="btn btn-info btn-sm" href="{{ route('agents.show', $agent->id) }}" style="width: 80px;">
                                            <i class="fas fa-eye"></i>
                                            Show
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer clearfix">
                {{ $agents->links() }}
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

@endsection