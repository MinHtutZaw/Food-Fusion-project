 <!-- Category Filter Dropdown -->
 <details class="relative">
      <summary
        class="cursor-pointer w-fit px-4 py-2 border border-blue-500  rounded-md hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-300">
        {{ isset($currentCuisine) ? $currentCuisine->name : 'Filter By Cuisines' }}
      </summary>
      <ul
        class="absolute mt-2 left-0 w-40 bg-white border border-gray-200 rounded shadow-md z-10">
        <li>
          <a
            href="/"
            class="block px-4 py-2 hover:bg-gray-100 text-gray-700">
            All Categories
          </a>
        </li>
        @foreach ($cuisines as $cuisine)
        <li>
          <a
            href="/?cusine={{$cuisine->name}}{{request('search')?'&search='.request('search'):''}}"
            class="block px-4 py-2 hover:bg-gray-100 text-gray-700">
            {{ $cuisine->name }}
          </a>
        </li>
        @endforeach
      </ul>
    </details>