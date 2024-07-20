<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
    <div class="container">
        <div class="card m-5">
            <div class="card-header">
                <div class="row">
                    <div class="col-10">
                        <h5>Blog List</h5>
                    </div>
                    <div class="col-2">
                        <a href="{{ route('blog.create') }}" class="btn btn-sm btn-primary">Create Blog</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>S No.</th>
                            <th>Blog Image</th>
                            <th>Blog Title</th>
                            <th>Posted By</th>
                        </tr>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $blog['id'] }}</td>
                                <td>
                                    @isset($blog['image'])
                                        <img src="{{ $blog['image'] }}" width="100" height="100">
                                    @else
                                        No Image Found
                                    @endisset
                                </td>
                                <td>{{ $blog['blog_title'] }}</td>
                                <td>{{ $blog['blog_owner'] }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>