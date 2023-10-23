@extends('components.parent')

@section('content')
    <div class="p-5">
        <form action="{{ route('store_hero') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="hero_name">Hero Name</label>
                <input type="text" class="form-control" name="name" id="hero_name" placeholder="Hero Name">
            </div>
            <div class="form-group">
                <label for="hero_role">Hero Role</label>
                <input type="text" class="form-control" name="role" id="hero_role" placeholder="Hero Role">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
