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
   <div class="space-y-6 mt-4 md:mt-3">

    <div class="idea-container transition duration-500 cursor-pointer bg-white rounded-xl flex xl:space-x-4 md:space-x-3 sm:p-3">
            <div class="w-1/4 flex flex-col voting-button w-1/4 border-r flex-col p-5 items-center text-center p-0" >
                <p class="text-xl font-bold">12</p>
                <span class="text-gray-400 text-sm">Votes</span>
                <button class="text-sm bg-gray-200 rounded-xl p-2 text-black mt-3">VOTE</button>
            </div>
             <div class="w-10 voting-image pt-4 flex-col items-center text-center" >
                <img src="{{asset('images/user.png')}}" alt="" width="60" class="">
            </div>
             <div class="w-3/4 voting-infos xl:p-4 md:p-3 flex-col items-center text-left p-0" >
                <h3 class="font-bold text-lg">Lorem, ipsum dolor sit amet</h3>
                <p class="line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio modi, obcaecati non qui ea corporis impedit in et quo! Voluptatum cumque soluta optio natus reprehenderit nisi, harum consectetur quaerat ducimus!</p>
                <div class="vote-metas flex xl:flex-row md:flex-col md:text-left xl:justify-between md:space-y-4 items-center space-x-5 mt-3 sm:flex-col sm:gap-3">
                   <div class="col-1 items-center flex md:text-sm sm:text-xs justify-between space-x-6 text-gray-500  m-0">
                     <span>10 hours ago</span>
                    <span>Category</span>
                    <span>3 Comments</span>
                   </div>

                   <div class="col-1 flex space-x-5 items-center">
                    <button class="xl:text-sm bg-gray-200 rounded-xl px-4 py-2 text-black  uppercase md:text-xm sm:text-xs">Open</button>
                    <span class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 bg-gray-200 rounded-md">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>

                    </span>

                   </div>
                </div>
            </div>
    </div>

      <div class="idea-container transition duration-500 cursor-pointer bg-white rounded-xl flex xl:space-x-4 md:space-x-3 sm:p-3">
            <div class="voting-button flex flex-col w-1/4 border-r flex-col p-5 items-center text-center p-0" >
                <p class="text-xl text-blue-500 font-bold">12</p>
                <span class="text-gray-400 text-sm">Votes</span>
                <button class="text-sm bg-blue-500 rounded-xl p-2 text-white mt-3">VOTE</button>
            </div>
             <div class="w-10 voting-image pt-4 flex-col items-center text-center" >
                <img src="{{asset('images/user.png')}}" alt="" width="60" class="">
            </div>
             <div class="w-3/4 voting-infos xl:p-4 md:p-2 flex-col items-center text-left p-0" >
                <h3 class="font-bold text-lg">Lorem, ipsum dolor sit amet</h3>
                <p class="line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio modi, obcaecati non qui ea corporis impedit in et quo! Voluptatum cumque soluta optio natus reprehenderit nisi, harum consectetur quaerat ducimus!</p>
                <div class="vote-metas flex xl:flex-row md:flex-col md:text-left xl:justify-between md:space-y-4 items-center space-x-5 mt-3 sm:flex-col sm:gap-3">
                   <div class="col-1 flex items-center justify-between space-x-6 text-gray-500 md:text-sm sm:text-xs  m-0">
                     <span>10 hours ago</span>
                    <span>Category</span>
                    <span>3 Comments</span>
                   </div>

                   <div class="col-1 flex space-x-5 items-center">
                    <button class="text-sm bg-gray-200 rounded-xl px-4 py-2 text-white font-bold mt-3 md:text-xs uppercase bg-yellow-400">In progress</button>
                    <span class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 bg-gray-200 rounded-md">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
</svg>

                    </span>

                   </div>
                </div>
            </div>
    </div>

  <div class="idea-container transition duration-500 cursor-pointer bg-white rounded-xl flex xl:space-x-4 md:space-x-3 sm:p-3">
            <div class="voting-button flex flex-col w-1/4 border-r flex-col p-5 items-center text-center p-0" >
                <p class="text-xl text-black-500 font-bold">12</p>
                <span class="text-gray-400 text-sm">Votes</span>
                <button class="text-sm bg-gray-200 rounded-xl p-2 text-black mt-3">VOTE</button>
            </div>
             <div class="w-10 voting-image pt-4 flex-col items-center text-center" >
                <img src="{{asset('images/user.png')}}" alt="" width="60" class="">
            </div>
             <div class="w-3/4 voting-infos xl:p-4 md:p-3 flex-col items-center text-left p-0" >
                <h3 class="font-bold text-lg">Lorem, ipsum dolor sit amet</h3>
                <p class="line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio modi, obcaecati non qui ea corporis impedit in et quo! Voluptatum cumque soluta optio natus reprehenderit nisi, harum consectetur quaerat ducimus!</p>
                <div class="vote-metas flex xl:flex-row md:flex-col md:text-left xl:justify-between md:space-y-4 items-center space-x-5 mt-3 sm:flex-col sm:gap-3">
                   <div class="col-1 flex xl:items-center justify-between space-x-6 text-gray-500 md:text-sm sm:text-xs m-0">
                     <span>10 hours ago</span>
                    <span>Category</span>
                    <span>3 Comments</span>
                   </div>

                   <div class="col-1 flex space-x-5 items-center">
                    <button class="text-sm bg-gray-200 rounded-xl px-4 py-2 text-white font-bold mt-3 md:text-xs uppercase bg-red-400">Closed</button>
                    <span class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 bg-gray-200 rounded-md">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
</svg>

                    </span>

                   </div>
                </div>
            </div>
    </div>

   </div>
</x-app-layout>
