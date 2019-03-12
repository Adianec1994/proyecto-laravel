<table class="table-hover table-striped">
    <thead>
    <tr>
        <th>Codigo</th>
        <th>Nombre</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categorias as $cat)
        <tr>
            <td>{{$cat->code}}</td>
            <td>{{$cat->name}}</td>
        </tr>
        @endforeach
    </tbody>

</table>
