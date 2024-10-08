<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Supprimer Utilisateur</h1>

        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div>
                {{ `Voulez-vous supprimer le compte $user->name` }}
            </div>

            <button type="submit" class="bg-red-500 text-white px-4 py-2">Supprimer</button>
        </form>
    </div>
</x-app-layout>
