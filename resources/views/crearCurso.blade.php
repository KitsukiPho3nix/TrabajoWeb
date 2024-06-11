@include("estructura.header")
  <h2>Crear Curso</h2>
  <form action="/curso" method="post">
     @csrf
     Nombre del Curso <input type="text" name="nombreDelCurso"> <br />
     Precio del Curso <input type="text" name="precioDelCurso"> <br />
     <input type="submit" value="Crear Curso">
  </form>
  @if (session('mensaje'))
      @if (session('resultado') == true)
          <h2 style="color: green;">Éxito</h2>
      @endif
      <p> {{ session('mensaje') }} </p>
  @endif
@include("estructura.footer")