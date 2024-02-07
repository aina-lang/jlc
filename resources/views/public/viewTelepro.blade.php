@extends('layouts.default')
@section('content')

    <div class="p-20 pb-10 pl-10 mt-20 w-full bg-white">
        <h1 class="text-4xl font-bold mb-2">Faire un rendez-vous avec <span class="text-teal-600">Aina Doe</span></h1>

    </div>


    <section class=" p-10 pt-0 flex justify-between space-x-10  bg-white">
        <div id="calendar" class="w-full "></div>
        <div class="w-[400px] rounded-md shadow-md min-h-screen ">


            <form class="max-w-sm mx-auto p-5 ">
                <div class="w-full p-3 pl-0">Selection de date</div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                    <input type="text" id="datepicker"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500"
                        placeholder="10/01/2024" required>
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Heure</label>
                    <input type="text" id="timepickerDebut"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500"
                        required>
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">a</label>
                    <input type="text" id="timepickerFin"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500"
                        required>
                </div>
                {{-- <div class="flex items-start mb-5">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value=""
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-teal-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-teal-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                            required>
                    </div>
                     <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                        me</label>
                </div> --}}
                <button type="submit"
                    class="text-white bg-teal-700 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800 self-end">Submit</button>
            </form>
        </div>
    </section>
   
@endsection
