<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Register!</h1>

                <form method="POST" action="/register" class="mt-10">
                    @csrf

                    <x-form.input name="name" placeholder="Sara Conner" />
                    <x-form.input name="username" placeholder="sara.conner" />
                    <x-form.input name="email" type="email" placeholder="sara.conner@liftoff.com" />
                    <x-form.input name="password" type="password" autocomplete="new-password" placeholder="hunter2" />
                    <x-form.button>Sign Up</x-form.button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
