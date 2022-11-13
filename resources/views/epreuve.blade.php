@extends('template')
@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>
                #
            </th>
            <th>
                Date
            </th>
            <th>
                Lieu
            </th>
            <th>
                Code
            </th>
            <th>
                Code Matiere
            </th>
        </tr>
    </thead>
    <tbody>

        @foreach($epreuves as $epreuve)

        <tr>
            <td>
                {{ $epreuve->id }}
            </td>
            <td>
                {{ $epreuve->date }}
            </td>
            <td>
                {{ $epreuve->lieu }}
            </td>
            <td>
                {{ $epreuve->code }}
            </td>
            <td>
                {{ $epreuve->matiere->libelle }}
            </td>
            
        </tr>


        @endforeach
    </tbody>
</table>
@endsection