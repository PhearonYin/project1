@extends('layouts.app')

@section('content')
{{-- Card dashboard --}}
<div class="row">
    <div class="col-xl-12 d-flex">
        <div class="card flex-fill student-space comman-shadow">
            <div class="card-header d-flex align-items-center ">
                <h5 class="font_kh_mool">ទិន្នន័យរបស់មន្ត្រីពន្ធនាគារ</h5>
                <ul class="chart-list-out student-ellips">
                    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table star-student table-hover table-center table-borderless table-striped">
                        <thead class="thead-light font_kh_mool">
                            <tr>
                                <th>ល.រ</th>
                                <th>នាម គោលនាម</th>
                                <th class="text-center">ភេទ</th>
                                <th class="text-center">អត្តលេខ</th>
                                <th class="">ឋានន្តរស័ក្តិ</th>
                                <th class="">តួនាទី</th>
                                <th class="text-center">សកម្មភាព</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                            <tr class="font_kh_Sr">
                                <td class="text-nowrap">
                                    <div>{{ $key + 1 }}</div>
                                </td>
                                <td class="text-nowrap">
                                    <a href="profile.html">
                                        <img class="rounded-circle" src="{{ $user->image }}" width="25" alt="User Image">
                                        {{ $user->name }}
                                    </a>
                                </td>
                                <td class="text-center">{{ $user->gender }}</td>
                                <td class="text-center">{{ $user->iduser }}</td>
                                <td class="">
                                    <div>{{ $user->ranks }}</div>
                                </td>
                                <td class="">{{ $user->position }}</td>
                                <td class="text-center">
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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
</div>
@endsection
