@extends('layouts.backend.index')

@section('title','MyBlog | Blogs')
@section('content')
<div class="content">
<div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h2 class="card-title">Blogs</h2>
                  </div>
                 
                </div>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>  
                            <td>Title</td>
                            <td>Author</td>
                            <td>Category</td>
                            <td>Date</td>
                            <td width="20%">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>
                                {{ $post->title}}
                            </td>
                            <td>{{ $post->author->name}}</td>
                            <td>{{ $post->category->title}}</td>
                            <td>
                                <abbr title="{{ $post->dateformatted(true)}}">{{ $post->dateformatted()}}</abbr>
                            </td>
                            <td>
                                <a href="#" class="btn btn-xs btn-default">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-xs btn-default">
                                    <i class="fa fa-times"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                {{ $posts->links()}}
              </div>
            </div>
          </div>
        </div>
</div>
@endsection
