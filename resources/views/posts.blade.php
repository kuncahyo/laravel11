<x-layout>
    <x-slot:title>{{$title}}</x-slot>

    @foreach ($posts as $post)
        
    @endforeach
  <article class="py-8 max-w-screen-md border-b-2 border-gray-300">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 ">Judul Artikel</h2>
    <div class="text-base text-gray-500">
      <a href="#" class="hover:underline">Kuncahyo Adi P</a> | 1 juni 2025
    </div>
    <p class="my-4 font-light">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque expedita suscipit soluta vitae eveniet harum aliquam exercitationem iure consectetur necessitatibus, fugiat ab quis repellendus illum aut. Cupiditate placeat tenetur maiores.
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sapiente similique repellendus perspiciatis, non, modi ipsum veritatis, ut dolorem atque blanditiis nesciunt libero nostrum dicta harum alias sit maiores sequi.
    </p>
    <a href="#" class="font-medium text-blue-500 hover:underline ">Readmore &raquo;</a>
  </article>
</x-layout>