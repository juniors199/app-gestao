<h3>Fornecedor</h3>


@php
  
  /*
    if(!<condição>) {} // enquanto executa se o retorno for true
  */

  /*
    if(isset($variavel)) {} // retornar true se a variavel estiver definida
  */

  /*
    if(empty($variavel)) {} // retornar true se a variavel estiver vazia
  */



@endphp

{{-- @unless executa se o retorno for false --}}

@isset($fornecedores)
  @forelse ( $fornecedores as $indice => $fornecedor)
    Iteração atual:{{ $loop->iteration }}
    <br>
    Fornecedor: {{ $fornecedor['nome'] }}
    <br>
    Status: {{ $fornecedor['status'] }}
    <br>
    CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
    <br>
    Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{ $fornecedor['telefone'] ?? '' }}
    <br>

    @if($loop->first)
      Primeira iteração do loop.
    @endif
    @if($loop->last)
      Ultima iteração do loop.

      <br>
      Total de registros: {{ $loop->count }}
    @endif
    <hr>

    <br>
  @empty
    Nao existem fornecedores cadastrados.
  @endforelse
@endisset

{{-- BLOCO PARA IMPLEMENTAÇÂO DO WHILE --}}
{{-- @isset($fornecedores)
  @php $i = 0 @endphp 
  @while(isset($fornecedores[$i]))
    Fornecedor: {{ $fornecedores[$i]['nome'] }}
    <br>
    Status: {{ $fornecedores[$i]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido' }}
    <br>
    Telefone: ({{ $fornecedores[$i]['ddd'] ?? ''}}) {{ $fornecedores[$i]['telefone'] ?? '' }}
    <br><hr><br>
    @php $i++ @endphp
  @endwhile
@endisset --}}

{{-- BLOCO DE VERIFICAÇÂO USANDO FOR
@isset($fornecedores)
  @for($i = 0; isset($fornecedores[$i]); $i++)
    Fornecedor: {{ $fornecedores[$i]['nome'] }}
    <br>
    Status: {{ $fornecedores[$i]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido' }}
    <br>
    Telefone: ({{ $fornecedores[$i]['ddd'] ?? ''}}) {{ $fornecedores[$i]['telefone'] ?? '' }}
    <br><hr><br>
  @endfor
@endisset --}}


{{-- SWITCH CASE --}}

{{-- @switch( $fornecedores[0]['ddd'])
  @case ('11')
    São Paulo - SP
    @break
  @case ('32')
    Juiz de Fora - MG
    @break
  @case ('85')
    Fortaleza - CE
    @break
  @default
    Estado nao identificado
@endswitch --}}


{{-- IF/ELSE --}}
{{-- 
@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3> Existem alguns fornecedores cadastrados </h3>
@elseif(count($fornecedores) > 10)
    <h3> Existem varios fornecedores cadastrados </h3>
@else
    <h3> Nao existem fornecedores cadastrados </h3>
@endif
 --}}