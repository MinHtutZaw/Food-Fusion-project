@props(['blogs'])

<section class="max-w-7xl mx-auto px-4 " id="blogs">
  <h2 class="text-3xl font-bold text-center mb-8 mt-4">Recipes</h2>

  <form class="max-w-4xl mx-auto mb-6" action="">
    <div class="flex flex-wrap items-center gap-4">
      <!-- Search Input + Button -->
      <div class="flex flex-grow">
        @if(request('cuisine'))
        <input
          name="cuisine"
          type="hidden"
          value="{{request('cuisine')}}" />
        @endif
      
        <input
          type="text"
          name="search"
          value="{{ request('search') }}"
          placeholder="Search Blogs..."
          class="w-full px-4 py-2 border border-gray-300 rounded-l focus:outline-none" />
        <button
          type="submit"
          class="bg-blue-600 text-white px-4 rounded-r">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
            <path fill="currentColor" d="M12.048 11.074L15 14.025l-.975.975l-2.951-2.952A6.205 6.205 0 0 1 1 7.202A6.205 6.205 0 0 1 7.203 1a6.205 6.205 0 0 1 4.845 10.074m-1.382-.512a4.823 4.823 0 0 0-3.463-8.184a4.823 4.823 0 0 0-4.825 4.825a4.823 4.823 0 0 0 8.184 3.463zM8.015 4.567a1.379 1.379 0 1 0 1.823 1.824a2.758 2.758 0 1 1-5.392.812a2.757 2.757 0 0 1 3.569-2.636" />
          </svg>
        </button>
      </div>

      <x-category-dropdown />

    </div>
  </form>

  <!-- Blog Cards -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @forelse ($blogs as $blog)
    <x-blog-card :blog="$blog" />
    @empty

    <p class="text-center text-gray-500 justify-center">No blogs found.</p>
    @endforelse


  </div>
</section>