@extends('layouts.default')
@section('content')
    <script>
        toastify() - > success('Your action was successful!');
    </script>
    <section class="grid grid-cols-2 justify-center items-center min-h-screen  ">

        <div class="py-8 mx-auto mt-10 px-10  shadow-md rounded-md bg-white">
            <form class="mt-8 space-y-6" action="{{ route('login.client') }}" method="POST">
                @csrf
                @method('POST')
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse
                        email</label>
                    <input type="email" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500"
                        placeholder="name@company.com" required>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de
                        passe</label>
                    <input type="password" name="password" id="password" placeholder="••••••••"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500"
                        required>
                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" name="remember" type="checkbox"
                            class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-teal-300 dark:focus:ring-teal-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600"
                            required>
                    </div>
                    <div class="ms-3 text-sm">
                        <label for="remember" class="font-medium text-gray-500 dark:text-gray-400">Se souvenir de
                            moi</label>
                    </div>
                    <a href="#"
                        class="ms-auto text-sm font-medium text-teal-600 hover:underline dark:text-teal-500">Mot de passe
                        oublié?</a>
                </div>
                <div class="grid grid-cols-2 gap-8">
                    <button type="submit"
                        class="w-full px-5 py-3 text-base font-medium text-center text-white bg-teal-700 rounded-lg hover:bg-teal-800 focus:ring-4 focus:ring-teal-300 sm:w-auto dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800">Se
                        connecter en tant que client</button>
                    <button type="submit"
                        class="w-full text-teal-600 px-5 py-3 text-base font-medium text-center hover:text-white border-teal-700 rounded-lg hover:bg-teal-800 focus:ring-4 focus:ring-teal-300 sm:w-auto dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800 border-2">En
                        tant que teleprospecteur</button>
                </div>
                <div class="text-sm font-medium text-gray-900 dark:text-white">
                    Vous n'êtes pas inscrites ? <a class="text-teal-600 hover:underline dark:text-teal-500"
                        href="/register/">Crée un compte ici</a>
                </div>
            </form>
        </div>

        <div class="bg-center bg-no-repeat bg-cover bg-gray-700 bg-blend-multiply  w-full h-screen flex items-center justify-center text-white"
            style="background-image: url('{{ asset('images/bg1.jpg') }}')">
            <h1 class="text-3xl">JLC</h1>
        </div>
    </section>
@endsection
