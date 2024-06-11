@include("estructura.header")
  <h2>Cursos</h2>
  @if (session('eliminado'))
      <b>Curso Eliminado</b> <br />
  @endif
  @if (session('modificado'))
      <b>Curso Modificado</b> <br />
  @endif
  <table>
    <tr>
        <th>Nombre del Curso</th>
        <th>Precio del Curso</th>
        <th>Fecha de Creación</th>
    </tr>
    @foreach ($cursos as $curso)
        <tr>
            <td> {{ $curso -> nombreDelCurso }} </td>
            <td> {{ $curso -> precioDelCurso }} </td>
            <td> {{ $curso -> creadoEn }} </td>
            <td><a href="/eliminar/{{ $curso -> $id }}">Eliminar Curso</a></td>
            <td><a href="/modificar/{{ $curso -> $id }}">Modificar Curso</a></td>
        </tr>
    @endforeach
  </table>
@include("estructura.footer")