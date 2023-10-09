@extends('components.parent')

@section('content')
    <div class="p-5">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Project</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            @php
                $projects = ['Calculator', 'Accounting', 'Student Report', 'POS Resto', 'Online Store', 'Pet Shop'];
            @endphp

            @php($i = 0)
            @foreach ($projects as $pro)
                @php ($i++)
                @php ($semester = '')
                @if ($i % 2 == 0)
                    @php ($semester = 'ODD')
                @else
                    @php ($semester = 'EVEN')
                @endif
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $pro }}</td>
                    <td>{{ $semester }}</td>
                    <td>
                        @if ($i == 1)
                            My very FIRST project
                        @elseif ($i == count($projects))
                            My LAST project
                        @else
                            Lorem ipsum dolor sit amet
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
