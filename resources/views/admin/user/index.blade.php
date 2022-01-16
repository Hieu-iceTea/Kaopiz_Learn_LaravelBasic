@extends('admin.layout.master')

@section('title', 'Post')

@section('body')
    <!-- Main -->
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                    </div>
                    <div>
                        Post
                        <div class="page-title-subheading">
                            View, create, update, delete and manage.
                        </div>
                    </div>
                </div>

                <div class="page-title-actions">
                    <a href="./admin/post/create" class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-plus fa-w-20"></i>
                                    </span>
                        Create
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">

                    <div class="card-header">

                        <form>
                            <div class="input-group">
                                <input type="search" name="user_id" id="user_id" value="{{ request('user_id') }}"
                                       placeholder="user_id..." class="form-control">
                                <input type="search" name="phone" id="phone" value="{{ request('phone') }}"
                                       placeholder="phone..." class="form-control">
                                <input type="search" name="role_name" id="role_name" value="{{ request('role_name') }}"
                                       placeholder="role_name..." class="form-control">
                                <span class="input-group-append">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-search"></i>&nbsp;
                                                    Search
                                                </button>
                                            </span>
                            </div>
                        </form>

                        <div class="btn-actions-pane-right">
                            <div role="group" class="btn-group-sm btn-group">
                                <button class="btn btn-focus">This week</button>
                                <button class="active btn btn-focus">Anytime</button>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">Full name</th>
                                <th>Phone</th>
                                <th>Role Name</th>
                                {{--<th class="text-center">Actions</th>--}}
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $user)
                                <tr>
                                    <td class="text-center text-muted">{{ $user->first_name . ' ' . $user->last_name }}</td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">{{ $user->phone->number ?? '' }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">{{ $user->roles->pluck('name')  }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    {{--<td class="text-center">
                                        <a href="./admin/post/{{ $user->id }}"
                                           class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">
                                            Details
                                        </a>
                                        <a href="./admin/post/{{ $user->id }}/edit" data-toggle="tooltip" title="Edit"
                                           data-placement="bottom" class="btn btn-outline-warning border-0 btn-sm">
                                                        <span class="btn-icon-wrapper opacity-8">
                                                            <i class="fa fa-edit fa-w-20"></i>
                                                        </span>
                                        </a>
                                        <form class="d-inline" action="./admin/post/{{ $user->id }}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-hover-shine btn-outline-danger border-0 btn-sm"
                                                    type="submit" data-toggle="tooltip" title="Delete"
                                                    data-placement="bottom"
                                                    onclick="return confirm('Do you really want to delete this item?')">
                                                            <span class="btn-icon-wrapper opacity-8">
                                                                <i class="fa fa-trash fa-w-20"></i>
                                                            </span>
                                            </button>
                                        </form>
                                    </td>--}}
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                    <div class="d-block card-footer">
                        {{--{{ $users->links() }}--}}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Main -->
@endsection
