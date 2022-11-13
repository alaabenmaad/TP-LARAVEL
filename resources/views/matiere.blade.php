@extends('template')
@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>
                #
            </th>
            <th>
                Code
            </th>
            <th>
                Libelle
            </th>
            <th>
                Coefficient
            </th>
        </tr>
    </thead>
    <tbody>

        @foreach($matieres as $matiere)
        <tr>
            <td>
                {{ $matiere->id }}
            </td>
            <td>
                {{ $matiere->code }}
            </td>
            <td>
                {{ $matiere->libelle }}
            </td>
            <td>
                {{ $matiere->coefficient}}
            </td>
        </tr>

        @endforeach
    </tbody>
</table>
@endsection