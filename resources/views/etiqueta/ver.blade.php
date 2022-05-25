@extends('base')


@section('contenido')
<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mx-8 " type="button" >
    <a href="{{ route('etiqueta.nueva') }}">Añadir Etiqueta</a>
</button>
<table class="border-separate border border-slate-400 m-8">
  <thead>
    <tr>
      <th class="border border-slate-300 ">Nombre</th>
      <th class="border border-slate-300 ">Color</th>
      <th class="border border-slate-300 ">Editar</th>
      <th class="border border-slate-300 ">Borrar</th>
    </tr>
  </thead>
  <tbody>
  @foreach($etqn as $item)
    <tr>
      <td class="border border-slate-300 "><p style="color: {{$item->color}}">{{$item->etiqueta}}</p></td>
      <td class="border border-slate-300 ">{{$item->color}}</td>
      <td class="border border-slate-300 "><a href="{{ route('etiqueta.veredit', $item) }}">Editar</a></td>
      <td class="border border-slate-300 "><a href="{{ route('etiqueta.borrar', $item) }}">Borrar</a></td>
    </tr>
  @endforeach
  @foreach($etqr as $item1)
    <tr>
      <td class="border border-slate-300 "><p style="color: {{$item1->color}}">{{$item1->etiqueta}}</p></td>
      <td class="border border-slate-300 ">{{$item1->color}}</td>
      <td class="border border-slate-300 "></td>
      <td class="border border-slate-300 "></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection