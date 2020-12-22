<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Artikel Baru</title>
  </head>
  <body>

  <body>
  <nav class="navbar navbar-dark bg-primary">
  <h2> Project UTS Laravel</h2>
  </nav>
  
  <br>
  <br>
  <br>
  <div class="content">
    <div class="row">
      <div class="col-lg-2">
      </div>
        <div class="col-lg-8">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2> Tulis Artikel Baru</h2>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{route('artikel.store')}}" >
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul Artikel</label>
                          <input type="text" name="judul" class="form-control" id="judul" placeholder="Tulis Judul Disini" required>
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                          <input type="textarea" name="penulis" class="form-control" id="penulis" placeholder="Christopher Calvin" required>
                    </div>
                    <div class="form-group">
                        <label for="konten">Isi Artikel</label>
                        <br>
                        <textarea name="content" cols="172" rows="10" placeholder="Tulis Konten Disini" required></textarea>
                    </div>
                    <div class="form-footer pt-5 border-top">
                            <a href="{{ url('artikel') }}" class="btn btn-secondary btn-danger">Batal</a>
                            <button type="submit" class="btn btn-primary btn-default">Posting Artikel</button>
                    </div>
                  </form>
                </div> 
    <script>
      $('#summernote').summernote();
    </script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>