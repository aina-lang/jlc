<section class="grid grid-cols-2 p-24 bg-gray-50">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Contactez-nous</h1>

        @if (session('success'))
            <div class="bg-green-200 text-green-800 border-l-4 border-green-500 p-4 mb-6">
                {{ session('success') }}
            </div>
        @endif

        <form action="/contact" method="post" class="max-w-md ">
            @csrf
            <div class="mb-4">
                <label for="subject" class="block text-gray-600 text-sm font-semibold mb-2">Sujet :</label>
                <input type="text" name="subject" id="subject" value="{{ old('subject') }}"
                    class="w-full p-2 border rounded-md focus:outline-none focus:ring focus:border-teal-300">
                @error('subject')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="message" class="block text-gray-600 text-sm font-semibold mb-2">Message :</label>
                <textarea name="message" id="message"
                    class="w-full p-2 border rounded-md focus:outline-none focus:ring focus:border-teal-300">{{ old('message') }}</textarea>
                @error('message')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-600 text-sm font-semibold mb-2">Adresse e-mail :</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}"
                    class="w-full p-2 border rounded-md focus:outline-none focus:ring focus:border-teal-300">
                @error('email')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="bg-teal-500 text-white p-3 px-5 rounded-md hover:bg-teal-600">Envoyer</button>
        </form>

        
    </div>
    <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29302.892307446702!2d43.6764672!3d-23.3570304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1f647dc9c53a5205%3A0x905abf8c1fcad8d6!2sVictory%20Hotel%20%26%20Restaurant%20Tulear!5e0!3m2!1sfr!2smg!4v1706771996560!5m2!1sfr!2smg"
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade" class="shadow-lg rounded-md"></iframe>
</section>
