@extends('template')
@section('content')


<div class="container" style="margin: 130px;border: 4px solid #0062cc;
        border-radius: 10px;padding: 10px;top: 124px;position: absolute;">

    <form method="post" action="/matierees">
        {{ csrf_field() }}
        <h1 class="h3" style="text-align: center;">Ajouter Une Matiere</h1>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="Lieu">Code</label>
                <input type="text" name="code" class="form-control" id="Lieu">
            </div>
            <div class="form-group col-md-2">
                <label for="Lieu">Libelle</label>
                <input type="text" name="libelle" class="form-control" id="Lieu">
            </div>
            <div class="form-group col-md-2">
                <label for="Lieu">coefficient</label>
                <input type="number" name="coff" class="form-control" id="Lieu">
            </div>

        </div>

        <button type="submit" name="submit" class="btn btn-primary">Ajouter</button>

    </form>

</div>
</body>