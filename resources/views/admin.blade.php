@extends('template.app')

@section('content')
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Peduli Diri</title>
    </head>
    <body>
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Table Profile <a href="/user_pdf" class="btn btn-primary float-right" target="_blank">CETAK PDF</a></h4>
                  
                  <div class="table-responsive">
                      
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Role
                          </th>
                          <th>
                            NIK
                          </th>
                          <th>
                            Nama
                          </th>
                          <th>
                            Nomor Telepon
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Alamat
                          </th>
                          <th>
                            Username
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($user as $p)
                            <tr>
                                <td>{{ $p->role }}</td>
                                <td>{{ $p->nik }}</td>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->telp }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>{{ $p->username }}</td>
                                <td><a href="/perjalanan/delete/{{ $p->id }}" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                      </svg>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                      </tbody>
                    </table>
                    <br>
                  </div>
                </div>
              </div>
            </div>
    </body>
</html>
@endsection