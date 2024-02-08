@extends('layouts.default')
@section('content')
    <section class="grid grid-cols-2 justify-center items-center min-h-screen">

        <div class="py-8 mx-auto mt-16 px-10 shadow-md rounded-md bg-white">
            <form class="gap-8 grid grid-cols-2 mt-8" method="POST" action="{{ route('register.client') }}">
                @csrf
                <div>
                    <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre
                        nom</label>
                    <input type="text" name="firstname" id="firstname"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500"
                        placeholder="" required>
                    @error('firstname')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="lastname"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prenom</label>
                    <input type="text" name="lastname" id="lastname" placeholder=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500"
                        required>
                    @error('lastname')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse
                        email</label>
                    <input type="email" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500"
                        placeholder="name@company.com" required>
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero
                        telephone</label>
                    <input type="phone" name="phone_number" id="phone_number" placeholder=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500"
                        required>
                    @error('phone_number')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de
                        passe</label>
                    <input type="password" name="password" id="password" placeholder=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500"
                        required>
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="password_confirmation"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmer mot de passe</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500"
                        required>
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="text-sm font-medium text-gray-900 dark:text-white">
                    Not registered yet? <a class="text-teal-600 hover:underline dark:text-teal-500" href="/login/">Create
                        account client</a>
                </div>
                <div class="grid grid-cols-1 gap-8 justify-end">
                    <button type="submit"
                        class="w-full px-5 py-3 text-base font-medium text-center text-white bg-teal-700 rounded-lg hover:bg-teal-800 focus:ring-4 focus:ring-teal-300 sm:w-auto dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800">S'inscrire</button>
                </div>
            </form>
        </div>

        <div class="bg-center bg-no-repeat bg-cover bg-gray-700 bg-blend-multiply w-full h-screen flex items-center justify-center text-white"
            style="background-image: url('{{ asset('images/bg1.jpg') }}')">
            <h1 class="text-3xl">JLC</h1>
        </div>
    </section>
@endsection
