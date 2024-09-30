<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> -->
        {{ __("You're logged in!") }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table style="border:1px solid blue;padding:5px; margin:5px">
                        <header>
                            Your Details
                        </header>
                        <tr>
                            <td>Name</td>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <td>Account Create on</td>
                            <td>{{ Auth::user()->created_at }}</td>
                        </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>
<br><br>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <table style="border:1px solid blue;padding:5px; margin:5px">
                        <header>
                            Your User Details
                        </header>
                        @if(isset($users))
                        <tr>
                            <td>Name</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td>Account Create on</td>
                            <td>{{$user->created_at }}</td>
                        </tr>
                        @else
                        <p>No users found.</p>
                        @endif
                        </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
