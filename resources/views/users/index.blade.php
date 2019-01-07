@include('layout')

<!--Para mostrar los datos de la variable $user que vienen del controlador-->


@section('content')
    <h1>{{ $title }}</h1>

    <ul>

        @forelse($users as $user)

            <li>{{ $user }}</li>

        @empty
            <li>No hay usuarios registrados</li>

        @endforelse

    </ul>
@show