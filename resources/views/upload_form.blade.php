<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pugacius</title>
    <link rel="stylesheet" href="students/class.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
.container {
margin-top:2%;
}
</style>
</head>
<body>
@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<div class="container">
<div class="row">
</div>
</div>
<br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form action="/multiuploads" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group">
<label for="Product Name">Pavadinimas</label>
<input type="text" name="name" class="form-control"  placeholder="Pavadinimas" >
</div>
<label for="Product Name">Prideti nuotrauka</label>
<br />
<input type="file" class="form-control" name="photos[]" multiple />
<br /><br />
<input type="submit" class="btn btn-primary" value="Paskelbti" />
</form>
</div>
</div>
</div>
</body>
</html>