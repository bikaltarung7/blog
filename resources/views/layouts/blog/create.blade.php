@extends('layouts.backend.index')

@section('title','MyBlog | Add new')
@section('content')
<div class="content">
<div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h2 class="card-title">New Blog</h2>
                  </div>
                  <div class="col-sm-6 text-right">
                    <a href="{{ route('blog.create')}}" class="btn btn-primary">Add new</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <form action="{{ route('blog.store')}}" method="post">
                    {{ csrf_field()}}
                    <div class="form-group" >
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" class="form-control">
                    </div>
                    @if($errors->has('title'))
                        <span class="help-block">{{$errors->first('title')}}</span>
                    @endif
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select id="category" name="category" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="excerpt">Excerpt</label>
                        <textarea id="excerpt"  name="excerpt" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea id="body" name="body" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
</div>
@endsection
