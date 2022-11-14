@extends('template')
@section('content')
<div class="container" style="margin: 130px;border: 4px solid #0062cc;
        border-radius: 10px;padding: 10px;top: 124px;position: absolute;">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="">
        {{ csrf_field() }}
        <h1 class="h3" style="text-align: center;">Ajouter Une Epreuve</h1>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="date">Code Epreuve</label>
                <input type="text" name="code" class="form-control" id="date">
            </div>
            <div class="form-group col-md-4">
                <label for="date">Date Epreuve</label>
                <input type="date" name="date" class="form-control" id="date">
            </div>
            <div class="form-group col-md-2">
                <label for="Lieu">Lieu</label>
                <input type="text" name="lieu" class="form-control" id="Lieu">
            </div>
            <div class="form-group col-md-2">
                <select class="form-control" name="codemat" required>
                    <option>----Selectionez----</option>
                    @foreach($matieres->all() as $m)
                    <option value="{{ $m->id }}">{{ $m->code }}</option>
                    @endforeach
                </select>
            </div>

        </div>

        <button type="submit" name="submit" class="btn btn-primary">Ajouter</button>

    </form>

</div>
</body>