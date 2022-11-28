@extends('template')
@section('content')
<!-- Button trigger modal -->

<a class="btn btn-primary align-items-center pull-right m-2" href="{{route('matForm')}}">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
    </svg>
    Ajouter une matiere
</a>


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
            <th>
                Editer
            </th>
            <th>
                Supprimer
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
            <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success align-items-center editbtn" data-bs-toggle="modal" data-bs-target="#editmodal{{ $matiere->id }}" id="{{ $matiere->id }}">
                    <i class="fa fa-edit fa-x"></i>
                </button>
                <!-- editModal to update info-->
                <div class="modal fade" id="editmodal{{ $matiere->id }}" tabindex="-1" aria-labelledby="editmodalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="editmodalLabel">Modifier</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form class="form-floating" method="POST" action="/matierees/{{ $matiere->id }}" id="editform">
                                {{ csrf_field() }}

                                {{ method_field('PATCH') }}
                                <div class="modal-body">
                                    <label class="p-2">ID</label>
                                    <input type="text" class="form-control" name="id" id="val1" value="{{ $matiere->id }}" disabled="disabled">

                                    <label class="p-2">Code matiere</label>
                                    <input type="text" class="form-control" name="code_mat" value="{{ $matiere->code }}">

                                    <label class="p-2">Libelle</label>
                                    <input type="text" class="form-control" name="libelle" id="val2" value="{{ $matiere->libelle }}" required>

                                    <label class="p-2">Coefficient</label>
                                    <input type="text" class="form-control" name="coff" id="val3" value="{{ $matiere->coefficient }}" required>
                                    <br>
                                    <div class="modal-footer m-2">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                                        <button type="submit" class="btn btn-success" id="submit">Confirmer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </td>
            <!-- end EditModal -->
            </td>
            <td>
                <!-- delete row from table -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#suppmodal{{ $matiere->id }}" id="{{ $matiere->id }}">
                    <i class="fa fa-trash"></i>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="suppmodal{{ $matiere->id }}" tabindex="-1" aria-labelledby="suppmodalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form class="form-floating" method="POST" action="/matierees/{{ $matiere->id }}" id="editform">

                            {{ csrf_field() }}

                            {{ method_field('DELETE') }}
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="suppmodalLabel"> <i class="fa fa-warning text-danger fa-2x"></i></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    voulez-vous supprimé cette matiere!
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- end delete option -->
            </td>
        </tr>

        @endforeach
    </tbody>
</table>
@endsection

@section('script')
<script type="text/javascript">
    $(function() {
        var table = $('#datatable').DataTable({});
    });
</script>
@endsection