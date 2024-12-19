<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-white leading-tight">
      {{ __('Financeurs des bourses') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-4xl mx-auto w-full sm:px-1">
      @if (session('success'))
        <div class="flex items-center mb-6 p-4 bg-emerald-500 text-white text-sm rounded-md w-full" role="alert"
          id="success-message">
          <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 20 20">
            <path
              d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM 9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 02Z" />
          </svg>
          <span class="sr-only">Info</span>
          <div class="ms-3 text-sm font-medium">
            {{ session('success') }}
          </div>
          {{-- <button
            class="ms-auto -mx-1.5 -my-1.5 bg-emerald-600 text-white rounded-lg focus:ring-2 focus:ring-emerald-500 p-1.5 hover:bg-emerald-500 h-8 w-8"
            data-dismiss="#success-message" aria-label="close">X</button> --}}
        </div>
      @endif
      <div class="flex justify-end my-2">
        <a href="{{ route('faculties.create') }}"
          class="px-4 py-2 bg-gray-700 hover:bg-gray-800 rounded-lg text-white">Ajouter un donateur</a>
      </div>
      <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="py-3 px-6">
                N°
              </th>
              <th scope="col" class="py-3 px-6">
                Nom
              </th>
              <th scope="col" class="py-3 px-6">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody>
            @if ($financers->count() > 0)
              @foreach ($financers as $key => $financer)
                <tr
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                  <td class="py-4 px-6 font-medium text-white whitespace-nowrap dark:text-white">
                    {{ $key + 1 }}
                  </td>
                  <td class="py-4 px-6 font-medium text-white whitespace-nowrap dark:text-white">
                    {{ $financer->name }}
                  </td>
                  <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="flex space-x-3">
                      <a href="{{ route('financers.edit', $financer->name) }}"
                        class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Edit</a>
                      <form action="{{ route('financers.destroy', $financer->name) }}" method="post"
                        class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                        onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                      </form>
                    </div>
                  </td>
                </tr>
              @endforeach
            @else
              <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="text-center py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                  colspan="4">
                  {{ __('Pas de financeurs enregistrée') }}
                </td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>

    </div>
  </div>
</x-app-layout>
