

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Dashboard Artikel</title>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-primary">
  <h2> Project UTS Laravel</h2>
  <a align= 'right' href="artikel/create" class="btn btn-secondary btn-danger">Buat Artikel Baru</a>
  </nav>
  
  <br>
  <br>
  <br>
  <div class="container">
    <div class="row">
    @if($data)
    @foreach($data as $d)
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                  <h2><center>{{$d->judul}}</center></h2>
                </div>
                <div class="card-header card-header-border-top">
                  <h6 class="card-subtitle mb-2 text-muted"><right>Oleh: {{$d->penulis}} | Tanggal: {{$d->datetime}} </right></h6>
                </div>
                <div class="card-body">
                  <p align="justify"class="card-text">{!! Str::words($d->content,75, '...')!!}  <a href="{{route('artikel.show',$d->slug)}}" class="card-link">Selengkapnya</a></p>
                </div>
                <div class="card-footer">
                  <a class="btn btn-primary" href="{{route('artikel.edit',$d->slug)}}" class="card-link">Ubah</a>
                  <form style="display:inline-block" action="{{route('artikel.destroy',$d->slug)}}" method="POST"><input type="hidden" name="_method" value="delete">{{csrf_field()}}<button type="submit" class="btn btn-danger">Hapus</button></form>
                </div>
            </div>
              <br>
              <br>
        </div>
        @endforeach
        @else
        <h1>Tidak ada artikel yang dapat ditampilkan :(</h1>
        <h1>Silahkan klik Buat Artikel Baru</h1>
        @endif
    </div>
</div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>