@extends('telepro._layouts.master')

@section('body')
    <h3 class="text-gray-700 text-3xl font-bold">Profil</h3>

    <div class="mt-8 grid grid-cols-2 gap-8 justify-center">
        <div class="mt-4">
            <div class="p-6 bg-white rounded-md shadow-md">
                <h2 class="text-lg text-gray-700 font-semibold capitalize">Account settings</h2>
                <form>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                        <div>
                            <label class="text-gray-700" for="username">Nom</label>
                            <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text">
                        </div>

                        <div>
                            <label class="text-gray-700" for="emailAddress">Prénom</label>
                            <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="email">
                        </div>

                        <div>
                            <label class="text-gray-700" for="password">Adresse email</label>
                            <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="password">
                        </div>

                        <div>
                            <label class="text-gray-700" for="passwordConfirmation">Numero telephone</label>
                            <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="password">
                        </div>
                    </div>

                    <div class="flex justify-end mt-4">
                        <button
                            class="px-4 py-2 bg-gray-800 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="mt-4 w-[350px] mx-auto">
            <div class="p-6 bg-white rounded-md shadow-md min-h-full w-[350px]">
                <h2 class="text-lg text-gray-700 font-semibold capitalize">Photo de profil</h2>
                <form class="min-h-[200px] w-full" id="profileForm">
                    <div class="min-h-full w-full">
                        <label for="imageInput"
                            class="min-w-full min-h-[200px] rounded-md border-2 border-dashed cursor-pointer flex justify-center items-center">
                           <span id="text1"> Sélectionner une image</span>
                            <input id="imageInput" class="hidden" type="file" accept="image/*" onchange="previewImage()">
                            <img id="imagePreview" class="hidden  rounded-md max-h-full" src="" alt="Aperçu de l'image">
                        </label>
                    </div>
                    <div class="flex justify-end mt-4">
                        <button type="button" onclick="updateProfile()"
                            class="px-4 py-2 bg-gray-800 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Modifier</button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            function previewImage() {
                const input = document.getElementById('imageInput');
                const preview = document.getElementById('imagePreview');

                if (input.files && input.files[0]) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.classList.remove('hidden');
                        document.querySelector("#text1").classList.add('hidden')
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }

            function updateProfile() {
                const input = document.getElementById('imageInput');
                const preview = document.getElementById('imagePreview');

                if (input.files && input.files[0]) {
                    // Envoyez le fichier sur le serveur ou effectuez toute autre action nécessaire ici
                    console.log('Fichier sélectionné:', input.files[0].name);
                } else {
                    // Aucun fichier sélectionné
                    console.log('Aucun fichier sélectionné.');
                }
            }
        </script>



    </div>


    <div class="mt-8 grid grid-cols-2 gap-8">
        <div class="mt-4 ">
            <div class="p-6 bg-white rounded-md shadow-md min-h-full">
                <h2 class="text-lg text-gray-700 font-semibold capitalize">Mot de passe</h2>
                <form>
                    <div class="grid grid-cols-1 s gap-6 mt-4">
                        <div>
                            <label class="text-gray-700" for="username">Nouveau mot de passe</label>
                            <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text">
                        </div>

                        <div>
                            <label class="text-gray-700" for="emailAddress">Confirmer mot de passe</label>
                            <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="email">
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <button
                            class="px-4 py-2 bg-gray-800 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
