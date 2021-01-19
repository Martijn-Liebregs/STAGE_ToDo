<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
<<<<<<< HEAD
                @foreach($lists as $list)
                    <div class="p-6 bg-white border-b border-gray-200">
                        <strong>{{ $list->name }}</strong>
                        <hr />
                        @foreach($list->Tasks as $task)
                           👻{{ $task->text }}<br />
                        @endforeach
                        <button data-list-id="{{ $list->id }}" class="modal-open bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full">TAAK TOEVOEGEN</button>
                    </div>
                @endforeach
                <button id="add_list">LIJST TOEVOEGEN</button>
                <form data-form="list_form" class="hidden" method="POST" action="{{ route('add_list') }}">
                    @csrf

                    <label for="list">List: </label>
                    <input id="list" type="text" name="list" required>

                    <button type="submit">Toevoegen</button>
                </form>
  
                <!--Modal-->
                <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
                    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
                    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                        <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                            </svg>
                            <span class="text-sm">(Esc)</span>
                        </div>

                        <!-- Add margin if you want to see some of the overlay behind the modal-->
                        <div class="modal-content py-4 text-left px-6">

                            <!--Title-->
                            <div class="flex justify-between items-center pb-3">
                                <p class="text-2xl font-bold">Taak toevoegen</p>
                                <div class="modal-close cursor-pointer z-50">
                                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                                    </svg>
                                </div>
                            </div>

                            <form id="task_form" method="POST" action="{{ route('add_task') }}">
                                @csrf

                                <input id="list_id" type="hidden" name="list_id" value="">

                                <label for="task">Inhoud: </label>
                                <input id="task" type="text" name="task" required autofocus>
                            </form>

                            <!--Footer-->
                            <div class="flex justify-end pt-2">
                                <button id="add_task" class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Opslaan</button>
                                <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Annuleren</button>
                            </div>
                        </div>
                    </div>
                </div><!--End Modal-->
=======
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
>>>>>>> c95f3f096846d47deb4b53fd78e86009e32ac77c
            </div>
        </div>
    </div>
</x-app-layout>
<<<<<<< HEAD

<script src="{{ asset('js/dashboard.js') }}" defer></script>
=======
>>>>>>> c95f3f096846d47deb4b53fd78e86009e32ac77c
