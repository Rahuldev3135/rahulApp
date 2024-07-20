<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
    <div class="container">
        <div class="card m-5">
            <div class="card-header">
                <div class="row">
                    <div class="col-10">
                        <h5>Create Blog</h5>
                    </div>
                    <div class="col-2">
                        <a href="{{ route('blog.index') }}" class="btn btn-sm btn-primary">Blog List</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Blog Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Owner Name</label>
                        <select class="form-control" id="exampleInputPassword1">
                            <option>Select Owner</option>
                            @foreach ($ownerList as $owner)
                                <option value="{{ $owner }}">{{ $owner }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>