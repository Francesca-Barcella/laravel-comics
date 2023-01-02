 @extends('layouts.app')

 @section('content')
 <div class="container-fluid bg-dark">

     
     <div class="container py-5">
         <div class="row row-cols-1 row-cols-s-4 row-cols-md-6">
             
             @forelse($comics as $comic)
             <div class="col">
                 <div class="py-3">
                     <img src="{{$comic['thumb']}}" alt="">
                     <div class="py-3 text-light">
                         <p>{{$comic['title']}}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col">
                    <p>Nothing comics to show</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>

 @endsection