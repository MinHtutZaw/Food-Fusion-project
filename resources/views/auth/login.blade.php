<x-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <h3 class="text-blue-600 text-center text-xl font-semibold my-4">Login form</h3>

                <div class="bg-white p-6 rounded shadow-sm">
                    <form method="POST" action="/login">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email address </label>
                            
                                <input
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="Please enter email address"
                                    required
                                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <x-error name="email" />
                                
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                            <input
                                type="password"
                                id="password"
                                name="password"
                                value="{{old('password')}}"
                                placeholder="Please enter your password"
                                class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 text:color-gray-700"
                                required>
                            <x-error name="password" />
                        </div>

                        <button
                            type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                            login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if (session('success'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 3000)"
        x-show="show"
        class="fixed top-10 left-1/2 transform -translate-x-1/2 z-50">
        <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg shadow-lg text-center max-w-sm">
            {{ session('success') }}
        </div>
    </div>
    @endif




</x-layout>