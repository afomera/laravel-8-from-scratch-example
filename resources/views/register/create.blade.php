<x-layout>
    <sction class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200  p-6 rounded-xl">
            <h1 class="text-center font-bold text-3xl">Register</h1>
            <form method="POST" action="/register" class="mt-10">

                @csrf

                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase text-sm text-gray-700">
                        Name
                    </label>

                    <input type="text" name="name" id="name"
                        class="
                        shadow appearance-none border rounded w-full py-3 px-3
                        text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        autocomplete="name" placeholder="Sara Conner" value="{{ old('name') }}">

                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase text-sm text-gray-700">
                        Username
                    </label>

                    <input type="text" name="username" id="username"
                        class="
                        shadow appearance-none border rounded w-full py-3 px-3
                        text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        autocomplete="username" placeholder="sara.conner" value="{{ old('username') }}">

                    @error('username')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase text-sm text-gray-700">
                        Email
                    </label>

                    <input type="email" name="email" id="email"
                        class="
                        shadow appearance-none border rounded w-full py-3 px-3
                        text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        autocomplete="email" placeholder="sara.conner@starship.com" value="{{ old('email') }}">

                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-6">
                    <label for="Password" class="block mb-2 uppercase text-sm text-gray-700">
                        Password
                    </label>

                    <input type="password" name="password" id="password"
                        class="
                        shadow appearance-none border rounded w-full py-3 px-3
                        text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        autocomplete="password" placeholder="hunter2">

                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>
            </form>
        </main>
        </section>
</x-layout>
