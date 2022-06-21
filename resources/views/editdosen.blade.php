<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  </head>
  <body>
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 bg-primary py-4"></div>
        </div>
        <div class="row">
            <div class="col-lg-2 vh-100">
              <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link" href="#">Home</a>
                <a class="nav-link active" href="/dosen">Dosen</a>
                <a class="nav-link" href="#">Mahasiswa</a>
                <a class="nav-link" href="#v-pills-settings">Skripsi</a>
              </div>
            </div>
            <div class="col-lg-10 vh-100">
                <div class="card mt-4">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container-fluid mt-4 rounded">
        @php
            $pakar = explode (',', $dosen -> pakar);
        @endphp
        <form action="/dosen/updatedosen/{{$dosen -> id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-grup w-25">
                <label>NIDN</label>
                <input type="number" name="nidn" class="form-control " value="{{$dosen -> nidn}}" readonly>
            </div>
            <div class="form-grup w-25">
                <label>Nama Dosen</label>
                <input type="text" name="nama" class="form-control" value="{{$dosen -> nama}}" required>
            </div>
            <label>Status</label>
            <div class="form-check w-25=">
                <input type="radio" name="status" value="Dosen Tetap" {{ $dosen->status == 'Dosen Tetap' ? 'checked' : ''}} class="form-check-input">
                <label>Dosen Tetap</label>
            </div>
            <div class="form-check w-25">
                <input type="radio" name="status" value="Dosen Tidak Tetap" {{ $dosen->status == 'Dosen Tidak Tetap' ? 'checked' : ''}} class="form-check-input">
                <label>Dosen Tidak Tetap</label>
            </div>
            <div class="form-grup w-25">
                <label>Jabatan Fungsional</label>
                <select name="jafung" class="form-control">
                    <option value="0">-- Pilih Jabatan Fungsional --</option>
                    <option value="Tenaga Pengajar" {{ $dosen->jafung == 'Tenaga Pengajar' ? 'selected' : ''}} >Tenaga Pengajar</option>
                    <option value="Asisten Ahli" {{ $dosen->jafung == 'Asisten Ahli' ? 'selected' : ''}} >Asisten Ahli</option>
                    <option value="Lektor" {{ $dosen->jafung == 'Lektor' ? 'selected' : ''}} >Lektor</option>
                    <option value="Lektor Kepala" {{ $dosen->jafung == 'Lektor Kepala' ? 'selected' : ''}} >Lektor Kepala</option>
                    <option value="Guru Besar" {{ $dosen->jafung == 'Guru Besar' ? 'selected' : ''}} >Guru Besar</option>
                </select>
            </div>
            <label>Bidang Keahlian</label>
            <div class="form-check w-25">
                <input type="checkbox" name="pakar[]" value="AI" {{ in_array ('AI', $pakar) ? 'checked':'' }} class="form-check-input">
                <label>AI</label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" name="pakar[]" value="WEB" {{ in_array ('WEB', $pakar) ? 'checked':'' }}  class="form-check-input">
                <label>WEB</label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" name="pakar[]" value="DBMS"{{ in_array ('DBMS', $pakar) ? 'checked':'' }} class="form-check-input">
                <label>DBMS</label>
            </div>
            <div class="form-grup pt-4">
                <input type="submit" value="SIMPAN" class="btn btn-outline-primary">
            </div>
        </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
                    </div>
                </div>
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