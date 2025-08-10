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
</x-app-layout>
