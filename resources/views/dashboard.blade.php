<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <span>{{Auth::user()->nombre}} {{Auth::user()->apellidos}}</span>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mx-8 " type="button" >
    <a href="{{ route('tarea.verinsertar') }}">Añadir Tarea</a>
    </button>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mx-8 " type="button" >
    <a href="{{ route('etiqueta.gestionar') }}">Gestionar Etiquetas</a>
    </button>
    <table class="border-separate border border-slate-400 m-8">
  <thead>
    <tr>
      <th class="border border-slate-300 ">Título</th>
      <th class="border border-slate-300 ">fecha</th>
      <th class="border border-slate-300 ">completada</th>
      <th class="border border-slate-300 ">Etiquetas</th>
      <th class="border border-slate-300 ">Editar</th>
      <th class="border border-slate-300 ">Borrar</th>
      <th class="border border-slate-300 ">Finalizar</th>
    </tr>
  </thead>
  <tbody>
  @foreach($tareas as $item)
  
    <tr>
      <td class="border border-slate-300">{{$item->titulo}} </td>
      <td class="border border-slate-300 ">{{$item->fecha}} </td>
      @if($item->completa == 1)
      <td class="border border-slate-300 ">Si </td>
      @endif
      @if($item->completa == 0)
      <td class="border border-slate-300 ">No </td>
      @endif
      <td class="border border-slate-300 ">
      @foreach($item->etiquetas() as $etq)
      <p style="color: {{$etq->color}} ">{{$etq->etiqueta}} </p>
      @endforeach
      </td>
      @if($item->completa == 0)
      <td class="border border-slate-300 "><a href="{{ route('tarea.veredit', $item) }}">Editar tarea</a> </td>
      @endif
      @if($item->completa == 1)
      <td class="border border-slate-300 ">Completada</td>
      @endif
      <td class="border border-slate-300 "><a href="{{ route('tarea.borrar', $item) }}">Borrar tarea</a> </td>
      @if($item->completa == 0)
      <td class="border border-slate-300 "><a href="{{ route('tarea.finalizar', $item->idTar) }}">Finalizar tarea</a> </td>
      @endif
      @if($item->completa == 1)
      <td class="border border-slate-300 ">Completada</td>
      @endif
    </tr>
    
  @endforeach
  </tbody>
</table>


    @foreach($tareas as $item)
    
    @endforeach

</x-app-layout>

