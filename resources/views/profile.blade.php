<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ $user->name }}, you're logged in!
                    <div class="w-full sm:max-w-md mt-6 overflow-hidden">
                        @foreach (['success'] as $key)
                            @if(Session::has($key))
                                <div class="font-medium text-sm text-green-600 mb-4">{{ Session::get($key) }}</div>
                            @endif
                        @endforeach

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form action="{{route('profile')}}" method="POST">
                            @csrf

                            <!-- Name -->
                            <div>
                                <x-label for="name" :value="__('Name*')" />
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $user->name }}" required autofocus />
                            </div>

                            <!-- Surname -->
                            <div class="mt-4">
                                <x-label for="surname" :value="__('Surname')" />

                                <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" value="{{ $user->surname }}" />
                            </div>

                            <!-- Patronymic -->
                            <div class="mt-4">
                                <x-label for="patronymic" :value="__('Patronymic')" />

                                <x-input id="patronymic" class="block mt-1 w-full" type="text" name="patronymic" value="{{ $user->patronymic }}" />
                            </div>

                            <!-- Convenient time for calls -->
                            <div class="mt-4">
                                <x-label for="convenient_time_for_calls" :value="__('Convenient time for calls')" />

                                <x-input id="convenient_time_for_calls" class="block mt-1 w-full" type="text" name="convenient_time_for_calls" value="{{ $user->convenient_time_for_calls }}" />
                            </div>

                            <!-- Phone -->
                            <div class="mt-4">
                                <x-label for="phone" :value="__('Phone*')" />

                                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{ $user->phone }}" required />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Save') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
