<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
               <form action="{{ route('todo.update',$todo->id) }}" method="POST">
                @csrf
                @method('put')
                    <div class="w-full">
                        <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4">
                            Todo
                          </label>
                        <input value="{{ $todo->todos }}"class="bg-gray-200 appearance-none border-2 border-gray-200 mb-3 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="text" name="todos">
                        
                    </div>
                    <button  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                        Save
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
