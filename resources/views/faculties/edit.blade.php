<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-white leading-tight">
      {{ __('Mettre à jour une faculté') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-lg mx-auto sm:px-6 lg:px-8">
      <div class="m-2 p-2 border border-slate-600 rounded">
        <div class="w-full my-2">
          <form method="POST" action="{{ route('faculties.update', $faculty->sigle) }}">
            @csrf
            @method('PUT')
            <div class="sm:col-span-6">
              <label for="name" class="block text-sm font-medium text-gray-700">Nom de la faculté</label>
              <div class="mt-1">
                <input type="text" id="name" name="name" autocomplete="off" value="{{ $faculty->name }}"
                  class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('firstname') @enderror" />
              </div>
            </div>
            <div class="sm:col-span-6 pt-4">
              <label for="sigle" class="block text-sm font-medium text-gray-700">Sigle</label>
              <div class="mt-1">
                <input type="text" id="sigle" name="sigle" autocomplete="off" value="{{ $faculty->sigle }}"
                  class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('lastname') @enderror" />
              </div>
            </div>
            <div class="py-4">
              <button type="submit"
                class="px-4 py-2 bg-gray-700 hover:bg-gray-800 rounded-lg text-white">Enregistrer</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
