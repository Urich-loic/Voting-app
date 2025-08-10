<x-app-layout>
   <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="" class="rounded-xl px-7 py-2 border-none">
                <option value="category one">category one</option>
                <option value="category one">category one</option>
                <option value="category one">category one</option>
                <option value="category one">category one</option>
                <option value="category one">category one</option>
            </select>
        </div>

         <div class="w-2/3">
            <select name="other_filter" id="" class="rounded-xl px-7 py-2 border-none">
                <option value="category one">category one</option>
                <option value="category one">category one</option>
                <option value="category one">category one</option>
                <option value="category one">category one</option>
                <option value="category one">category one</option>
            </select>
        </div>

         <div class="w-1/3 relative">
             <input type="search" name="" id="" placeholder="find an idea" class="rounded-xl border-none pl-8">
            <div class="absolute top-0 flex items-center h-full mr-2 left-1 mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </div>

        </div>
   </div>

   {{-- Idea container --}}
   <div class="space-y-6 mt-4">
    <div class="idea-container transition duration-500 cursor-pointer bg-white rounded-xl flex space-x-6">
            <div class="voting-button w-1/4 border-r flex-col p-5 items-center text-center p-0" >
                <p class="text-md">12</p>
                <span class="text-gray-400 text-sm">Votes</span>
                <button class="text-sm bg-gray-300 rounded-md p-2 text-black mt-3">VOTE</button>
            </div>
             <div class="w-2/4voting-image p-4 flex-col items-center text-center p-0" >
                <img src="{{asset('images/user.png')}}" alt="" width="100" class="">
            </div>
             <div class="w-3/4voting-infos p-4 flex-col items-center text-left p-0" >
                <h3 class="font-bold text-lg">Lorem, ipsum dolor sit amet</h3>
                <p class="line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio modi, obcaecati non qui ea corporis impedit in et quo! Voluptatum cumque soluta optio natus reprehenderit nisi, harum consectetur quaerat ducimus!</p>
                <div class="vote-metas flex justify-between items-center space-x-5 mt-3">
                   <div class="col-1 flex justify-between space-x-6 text-gray-500">
                     <span>10 hours ago</span>
                    <span>Category</span>
                    <span>3 Comments</span>
                   </div>

                   <div class="col-1 flex space-x-5 items-center">
                    <button class="text-sm bg-gray-200 rounded-md px-4 py-2 text-black mt-3">Open</button>
                    <span class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
</svg>

                    </span>

                   </div>
                </div>
            </div>
    </div>
   </div>
</x-app-layout>
