@extends('layouts.main')
@section('content')
<div class="container mt-5">
<div class="row">
<div class="col-md-12">
<div>
<h3 class="text-center my-4">HALAMAN USER</h3>
<hr style="margin-top:100px;">
</div>
<div class="card border-0 shadow-sm rounded">
<div class="card-body">
<table class="table table-bordered">
<thead>
<tr>
<th scope="col">GAMBAR</th>
<th scope="col">JUDUL</th>
<th scope="col">CONTENT</th>
</tr>
</thead>
<tbody>
@forelse ($posts as $post)
<tr>
<td class="text-center">
<img src="{{ asset('/storage/posts/' .$post->image) }}" class="rounded" style="width: 150px">
</td>
<td>{{ $post->title }}</td>
<td>{!! $post->content !!}</td>
</tr>
@empty
<div class="alert alert-danger">
Data Post belum Tersedia.
</div>
@endforelse 
</tbody>
</table>
<div style="display:flex;width:5px;">
{{ $posts->links() }}
</div>
</div>
</div>
</div>
</div>
</div>
@endsection   
</body>
</html>