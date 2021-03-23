@extends('layout')
          
          @section('content')
          <div class="container">
              
              <a href="/agregar" class="btn btn-primary">CREAR</a>
      
      
            <table class="table table-dark table-striped mt-4">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Código</th>
                  <th scope="col">Descripción</th>
                  <th scope="col">Cantidad</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>    
                @forelse ($elementos as $elemento)
                <tr>
                    <td>{{$elemento->id}}</td>
                    <td>{{$elemento->codigo}}</td>
                    <td>{{$elemento->descripcion}}</td>
                    <td>{{$elemento->cantidad}}</td>
                    <td>{{$elemento->precio}}</td>
                    <td>
                    <form method="POST" action="{{ url("/{$elemento->id}") }}">
                      <a href="{{ route('elementos.editar', ['id' => $elemento->id]) }}" class="btn btn-info">Editar</a>         
                     
                      @csrf
                      @method('DELETE')
                          
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>          
                    </td>        
                </tr>
                @empty
                  <p>no hay elementos disponibles </br> <a href="/agregar">Agregar elementos</a></p>
                @endforelse
              </tbody>
            </table>
          </div>
          @endsection
          