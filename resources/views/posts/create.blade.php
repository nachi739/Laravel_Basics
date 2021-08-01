@extends('layouts')

@section('content')
 
        <div class="container mt-4">
           <div class="border p-4">
               <h1 class="h5 mb-4">
                   投稿の新規作成
               </h1>
               
               <form method="POST" action="{{route('posts.store')}}">
                   {{csrf_field()}}
                   <fieldset class="mb4">
                       <div class="form-group">
                           <Label for="title">
                               タイトル
                           </Label>
                           <input
                                id="title"
                                name="title"
                                class="form-control"
                                value="{{old('title')}}"
                                type="text"
                                >
                                <div class="text-danger">
                                    {{$errors->first('title')}}
                                </div>
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
                            >{{old('body')}}</textarea>
                            <div class="text-danger">
                                {{$errors->first('body')}}
                            </div>
                            
                        </div>
                        <div class="mt-5">
                            <a class="btn btn-secondary" href="{{route('top')}}">
                                キャンセル
                            </a>
                            
                            <button type="submit" class="btn btn-primary">
                                投稿する
                            </button>
                        </div>
                   </fieldset>
               </form>
           </div>
        </div>
        
@endsection('content')
