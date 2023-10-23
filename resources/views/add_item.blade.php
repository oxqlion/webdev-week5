@extends('components.parent')

@section('content')
    <div class="p-5">

        <form>
            <div class="form-group">
                <label for="item_name">Item Name</label>
                <input type="name" class="form-control" name="item_name" id="item_name" aria-describedby="emailHelp"
                    placeholder="Item Name">
            </div>
            <div class="form-group">
                <label for="item_role">Item Role</label>
                <input type="text" class="form-control" name="item_role" id="item_role" placeholder="Item Type">
            </div>
            <div class="form-group">
                <label for="item_damage">Item Damage</label>
                <input type="number" class="form-control" name="item_damage" id="item_damage" placeholder="Item Damage">
            </div>
            <div class="form-group">
                <label for="item_speed">Item Speed</label>
                <input type="number" class="form-control" name="item_speed" id="item_speed" placeholder="Item Speed">
            </div>
            <div class="form-group">
                <label for="item_defense">Item Defense</label>
                <input type="number" class="form-control" name="item_defense" id="item_defense" placeholder="Item Defense">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
