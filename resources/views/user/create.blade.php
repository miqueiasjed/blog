@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cadastro de Usuários
            <small></small>
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
                <h3 class="box-title">Cadastrar Usuário</h3>

                <div class="box-tools">

                </div>
            </div>
            <div class="box-body">
                {!! Form::open([
                                                'route' => ['user.create'],
                                                'class' => 'form-horizontal',
                                                'method' => 'POST',
                                                'id' => 'formUser',
                                                'enctype'=> 'multipart/form-data',
                                                'onSubmit' => 'return false;'
                                              ])
                                    !!}
                @include('user._form')
                <div class="box-footer">
                    <a href="{{ route('user.index') }}" class="btn btn-default">Cancelar</a>
                    <a href="javascript:void(0)" onClick="save();" class="btn btn-info pull-right">Salvar</a>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- /.box-body -->
            <div class="box-footer">

            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->

@endsection
