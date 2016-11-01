@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Listagem de Usuários
            <small>Usuarios do Sistema</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home.index') }}"><i class="fa fa-dashboard"></i> Inicial</a></li>
            <li class="active">Usuários</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Usuários cadastrados</h3>

                <div class="box-tools">
                    <a href="{{ route('user.create')  }}" class="btn btn-info">
                        <i class="fa fa-plus"></i> Novo
                    </a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Criado em</th>
                        <th>Atualizado em</th>
                        <th style="width: 5px;" colspan="2" class="text-center">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($content)
                        @foreach($content as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                                <td>{{ $user->updated_at->diffForHumans() }}</td>
                                <td  style="width: 5px;">
                                    <a href='{{ route('user.edit', ['user_id'=>$user->id])}}' class="btn btn-action btn-info"><i class="fa fa-edit"></i></button></a>
                                </td>
                                <td  style="width: 5px;">
                                    <a href="javascript:void(0)" class="btn btn-action btn-danger" onClick="deleteById({{ $user->id }})"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">Não há dados para exibir</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                {{ $content->render() }}
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->

@endsection
