@extends('admin.layouts.principal')

@section('conteudo-principal')

<section class="section">

<table class="highlight">
    <thead>
        <tr>
            <th>Flores</th>
            <th class="right-align">Opções</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($flores as $flor )
        <tr>
            <td>{{$flor}}</td>
            <td class="right-align">Editar - Excluir</td>
        </tr>

        @empty
            <tr>
                <td colspan="2">Não existem flores cadastradas!</td>
            </tr>
        @endforelse
    </tbody>
</table>

</section>

@endsection
