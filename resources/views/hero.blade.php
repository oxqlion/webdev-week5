@extends('components.parent')

@section('content')
    <div class="p-5 d-flex flex-column justify-content-end row">
        <div class="col">
            <a href="{{ route('add_hero') }}" class="btn btn-primary">Add New Hero</a>
        </div>
        <table class="table m-3">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Hero</th>
                    <th scope="col">Role</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($heroes as $hero)
                    <tr>
                        <th>{{ $hero->id }}</th>
                        <td>{{ $hero->name }}</td>
                        <td>{{ $hero->role }}</td>
                        <td>
                            <div class="d-flex">
                                <x-delete_btn></x-delete_btn>
                                <x-update_btn></x-update_btn>
                            </div>
                        </td>
                    </tr>
                @endforeach
        </table>
    </div>
@endsection
