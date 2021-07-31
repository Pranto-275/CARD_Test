<table border="1">
@foreach ($selectkey as $item)


        <tr>
            <td> {{ $item -> id }}</td>
            <td> {{ $item -> name }}</td>
            <td> {{ $item -> lastname }}</td>
            <td>  {{ $item -> address }}</td>
        </tr>







   <br>
@endforeach
</table>
