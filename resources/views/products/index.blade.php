@extends('layouts.admin.base')
@section('contenido')
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Bienvenido {{Auth()->user()->name}} {{Auth()->user()->lastname}}</h1>
      <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-download fa-sm text-white-50"></i> Agregar Producto
      </button>
    </div>

    <div class="row">
      <!-- Area Chart -->
      <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Listado de productos</h6>
            <div class="dropdown no-arrow">

            </div>
          </div>
          <!-- Card Body -->
          <div class="card-body">
            <div class="chart-area">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('product.store') }}" id="formProductos" method="post" enctype="multipart/form-data">

          <input type="hidden" name="token" id="token" value="{{ csrf_token() }}"/>
          <div class="form-group">
            <label>Categoria perteneciente</label>
            <select id="" name="categorie_id" style="width:100%" class="select2 form-control form-control-line" id="">
              @foreach($categories as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Nombre</label>
            <input type="text" id="name" name="name" class="form-control form-control-line">
          </div>
          <div class="form-group">
            <label>Precio</label>
            <input type="text" id="price" name="price" class="form-control form-control-line">
          </div>
          <div class="form-group">
            <label>Detalles del producto</label>
            <textarea id="description" name="description" class="form-control form-control-line" style="resize: none"></textarea>
          </div>
          <div class="form-group">
            <label>Imagenes</label>
            <button class="btn-success add btn-circle" type="button"><i class="fa fa-plus"></i></button>
            <div id="product-row">

              {{--FOTOS --}}
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Guardar producto</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">


  $(document).ready(function() {

    $(".add").click(function(){
      $( "#product-row" ).append("<input type='file' name='image[]' id='image' class='form-control form-control-line'>");
    });
  });

</script>
@endsection
