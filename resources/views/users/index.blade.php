<x-app-layout>
    <div class="container mx-auto py-8">
        <div class="flex justify-between mb-6">
            <h1 class="text-2xl font-bold ">Liste des Utilisateurs <a href="{{ route('users.create') }}"
                    class="text-blue-500">+</a>
            </h1>
            <form class="flex" action="{{ route('users.index') }}" method="GET">
                <input class="rounded-l " type="text" name="search" value="{{ request()->input('search') }}">
                <button type="submit"
                    class="text-white bg-blue-500 hover:bg-blue-400 rounded-r border border-black p-2 "><x-carbon-search
                        class="w-5 h-5 font-bold" /></button>
            </form>
        </div>

        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nom</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Rôle</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $user->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->role }}</td>
                        <td class="py-2 px-4 border-b flex justify-center">
                            <a href="{{ route('users.show', $user->id) }}" class="text-blue-500">Voir</a>
                            <a href="{{ route('users.edit', $user->id) }}" class="text-yellow-500 ml-2">Modifier</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 ml-2">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-6">
            {{ $users->links() }}
        </div>
    </div>
</x-app-layout>
