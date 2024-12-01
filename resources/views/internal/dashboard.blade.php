@extends('layout.layout')

@section('content')
<div class="container p-4">
    <div class="row">
        <div class="col my-auto">
            <table class="table table-striped" style="width: 100px;">
                <thead class="">
                    <tr class="">
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Text</th>
                        <th scope="col">Image</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($submission as $s)
                    <tr class="">
                        <td>{{ $s->id }}</td>
                        <td>{{ $s->name }}</td>
                        <td>{{ $s->message }}</td>
                        <td>{{ $s->image }}</td> 
                        <td>
                            {{-- <form action="{{route('dataHewan.detail', $a->animal_id)}}" method="get" onsubmit="return confirm('Apakah Anda Ingin Mengedit Hewan Ini?');">
                                <button class="btn btn-secondary border border-dark"><i class="fa-regular fa-pen-to-square"></i></button>
                            </form> --}}
                        </td> 
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="" style="width: fit-content; ">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="btn btn-danger">Log Out</button>
            </form>
        </div>
        <div class="" style="width: fit-content; ">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Create New
            </button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">New Message</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('message.post') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="modal-body">
                <label for="" class="my-3">Name</label>
                <input type="text" name="name" class="form-control">
                <br>
                <label for="" class="my-3">Text</label>
                <textarea name="message" class="form-control"></textarea>
                <br>
                <label for="" class="my-3">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection