<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Veterinários", 'rota' => "veterinarios.create"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo') Veterinarios @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">
            <x-datatable 
                title="Veterinários" 
                crud="veterinarios" 
                :header="['id', 'crmv', 'nome', 'especialidade']" 
                :data="$dados"
                :hide="[false, true, true, true]" 
            /> 
        </div>
    </div>
@endsection