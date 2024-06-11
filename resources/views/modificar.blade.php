@include("estructura.header")
  <h2>Modificar Curso</h2>
  <form action="/modificar" method="post">
    @csrf
    Id <input type="text" disabled name="id" value="{{ $curso -> $id }}"> <br />
    Nombre del Curso <input type="text" name="nombreDelCurso" value="{{ $curso -> nombreDelCurso }}"> <br />
    Precio del Curso <input type="text" name="precioDelCurso" value="{{ $curso -> precioDelCurso }}"> <br />
    <input type="submit" value="Modificar Curso">
  </form>
@include("estructura.footer")