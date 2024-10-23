@extends('site.layout')
@section('title', 'pagina doador' )
@section('conteudo')
   

@foreach ($mizeraveis as $mizeravel)
<table>
  <thead>
    <tr>
      
        <th>Nome<td>{{ $mizeravel->nome }}</td></th>
        <th>cep<td>{{ $mizeravel->cep }}</td> <</th>
        <th>situaçao<td>{{ $mizeravel->situaçao }}</td></th>
  

    </tr>
  </thead>
</table>



@endforeach



@endsection

