@extends('layouts')

@section('content')
 
        <div class="container mt-4">
           <div class="border p-4">
               <h1 class="h5 mb-4">
                   投稿の編集
               </h1>
               
               <form method="POST" action="{{route('posts.update', ['post' => $post])}}">
                   {{csrf_field()}}
                   {{method_field('PUT')}}
                   
                   <fieldset class="mb4">
                       <div class="form-group">
                           <Label for="title">
                               タイトル
                           </Label>
                           <input
                                id="title"
                                name="title"
                                class="form-control"
                                value="{{$post->title}}"
                                type="text"
                                >
                        </div>
                        <div>
                            <Lavel for="body">
                                本文
                            </Lavel>
                            
                            <textarea
                                id="body"
                                name="body"
                                class="form-control"
                                rows="4"
                            >{{$post->body}}</textarea>
                            
                        </div>
                        <div class="mt-5">
                            <a class="btn btn-secondary" href="{{route('posts.show', ['post' => $post])}}">
                                キャンセル
                            </a>
                            
                            <button type="submit" class="btn btn-primary">
                                更新する
                            </button>
                        </div>
                   </fieldset>
               </form>
           </div>
        </div>
        
@endsection('content')
