@extends('layouts.admin')


@section('content')

    <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Owner</th>
            <th>Category</th>
            <th>Photo </th>
            <th>Title</th>
            <th>Body</th>
            <th>Created </th>
            <th>Updated </th>
          </tr>
        </thead>
        <tbody>
         @if($posts)
             @foreach($posts as $post)
                  <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category ? $post->category->name : 'uncategorized' }}</td>
                    <td><img height="50" width="50" src="{{$post->photo ? $post->photo->file: 'https://via.placeholder.com/300'}}" alt="this is an iamge"></td>
{{--                    <td>{{$post->photo_id}}</td>--}}
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                  </tr>
             @endforeach
          @endif

        </tbody>
      </table>

@stop
