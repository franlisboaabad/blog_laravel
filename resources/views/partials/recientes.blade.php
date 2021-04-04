 <div class="card">
     <img src="{{ asset('blog/img/social.jpg') }}" class="card-img-top" alt="auditoria">
     <div class="card-body">
         <h5 class="card-title">Noticias recientes</h5>
         <nav>
             <ol>
                 @forelse($posts as $post)
                     <li class="mb-3"> <a href="{{ route('entrada', $post) }}">
                        <p class="text-justify">{{ $post->title }}</p>
                    </a> </li>
                 @empty
                     <p>No existen entradas recientes</p>
                 @endforelse
             </ol>
         </nav>
     </div>

 </div>
