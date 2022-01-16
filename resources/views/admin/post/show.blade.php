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

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body display_data">

                                    <h2 class="text-center">Post info</h2>
                                        <hr>
                                    <div class="position-relative row form-group">
                                        <label for="name" class="col-md-3 text-md-right col-form-label">
                                            Title
                                        </label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{ $post->title }}</p>
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="email" class="col-md-3 text-md-right col-form-label">Content</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{ $post->content }}</p>
                                        </div>
                                    </div>

                                    <div class="table-responsive mt-5">
                                        <h2 class="text-center">Comments list</h2>
                                        <hr>
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th>#ID</th>
                                                <th class="text-center">Content</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($post->comments as $comment)
                                                <tr>
                                                    <td class="text-center">
                                                        {{ $comment->id }}
                                                    </td>
                                                    <td class="text-center">{{ $comment->content_comment }}</td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Main -->

@endsection
