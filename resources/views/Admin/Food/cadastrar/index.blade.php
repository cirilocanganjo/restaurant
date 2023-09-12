@extends('layouts.marge.admin')
@section('conteudo')
    <div class="content-body">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Cadastrar Pratos</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form>
                                    @include('forms._Food.index')
                                    <button type="submit" class="btn btn-block btn-primary">Cadatrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>






            </div>
        </div>
    </div>
@endsection
