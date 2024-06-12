@extends('layouts.master')

@section('content')
    <!-- User dropdown menu -->
    <div>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </div>
@endsection

@section('contents')
    <div class="card">
        <div class="card-body">
            <!-- Filter form -->
            
       <a href="{{route('route-addnewcontact')}}" class=" btn btn-primary mb-2">Add new contact</a>
            <!-- Display filtered contacts -->
            <div class="table">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Message</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->full_name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td>{{ $contact->message }}</td>
                                <td>
                                    <a href="{{ route('route-editcontact', $contact->id) }}"
                                        class="btn btn-primary btn-sm" style="width: 72px">Edit</a>
                                    <form onsubmit='return confirm("Are you sure you want to delete this data")'
                                        action="{{ route('route-deletecontact', $contact->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm ">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection




