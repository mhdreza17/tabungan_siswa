@extends('dashboard.layouts.main')

@section('container')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      @if(($message = Session::get('success')))
        <div class="alert alert-success alert-block">	
          <strong>{{ $message }}</strong>
        </div>
      @endif
      <a class="nav-link btn btn-success create-new-button w-25" id="createbuttonDropdown" href="/dashboard/posts/create">+ Create New Post</a>
      </p>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th> # </th>
              <th> Title </th>
              <th> Category </th>
              <th class="text-center"> Action </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->category->name }}</td>
              <td class="text-center">
                <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span class="mdi mdi-eye"></span></a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span class="mdi mdi-tooltip-edit"></span></a>
                <form class="d-inline" action="/dashboard/posts/{{ $post->slug }}" method="POST">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Yakin Ingin Menghapus?')"><span class="mdi mdi-close-circle"></span></button>
              </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


@endsection