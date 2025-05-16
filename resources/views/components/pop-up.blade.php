<!-- Join Us button should trigger a popup form -->
<section x-data="{ open: false }" class="text-center ">
    <!-- Content and Join Us button -->
    <button @click="open = true" class="bg-yellow-400 text-black px-6 py-2 rounded hover:bg-yellow-600 font-semibold min-w-[150px]" id="joinUsbtn">
        Join Us
    </button>

    <!-- Modal Popup -->
    <div
        x-show="open"
        x-transition
        class="fixed inset-0 backdrop-blur-sm bg-transparent flex items-center justify-center z-50"
        style="display: none;">
        <div
            @click.away="open = false"
            class="bg-gray-900 text-white rounded-lg p-6 w-full max-w-md relative shadow-lg">
            <button @click="open = false" class="absolute top-3 right-3 text-white text-xl">&times;</button>

            <form method="POST" action="/register" class="space-y-4">
                @csrf
                <h3 class="text-blue-600 text-center text-xl font-semibold my-4">Register form</h3>
                <div>
                    
                    <input id="firstname" name="firstname" type="text" required
                        value="{{old('firstname')}}" placeholder="Please enter your first name"
                        class="w-full bg-gray-800 border border-gray-600 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    <x-error name="firstname" />
                </div>

                <div>
                   
                    <input id="lastname" name="lastname" type="text" required
                        value="{{old('lastname')}}" placeholder="Please enter your last name"
                        class="w-full bg-gray-800 border border-gray-600 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>

                <div>
                    
                    <input id="email" name="email" type="email" required value="{{old('email')}}" placeholder="Please enter email address"
                        class="w-full bg-gray-800 border border-gray-600 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    <x-error name="email" />
                </div>

                <div>
                  
                    <input id="password" name="password" type="password" required value="{{old('password')}}" placeholder="Please enter password"
                        class="w-full bg-gray-800 border border-gray-600 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    <x-error name="password" />
                </div>

                <div>
                    
                    <input id="password_confirmation" name="password_confirmation" type="password" required placeholder="Confirm password"
                        class="w-full bg-gray-800 border border-gray-600 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        <x-error name="password_confirmation" />

                </div>

                <button type="submit"
                    class="w-full bg-white text-black font-semibold py-2 rounded hover:bg-gray-300">
                    Create account
                </button>

                <p class="text-sm text-center mt-4">Already have an account?
                    <a href="/login" class="text-blue-400 underline">Log in</a>
                </p>
            </form>
        </div>
    </div>



    @if ($errors->any())
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const modalBtn = document.getElementById("joinUsbtn");
            if (modalBtn) {
                modalBtn.click(); // Reopen modal
            }
        });
    </script>
    @endif
</section>