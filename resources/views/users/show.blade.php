<x-app-layout>
    <div class="container mx-auto py-8 ">
        <div class="bg-white border border-gray-200 p-4 max-w-3xl">
            <h1 class="text-2xl font-bold mb-6">Détails de l'utilisateur</h1>
            <div>
                <div class="py-2 px-4">Nom: {{ $user->name }}</div>
                <div class="py-2 px-4">Email: {{ $user->email }}</div>
                <div class="py-2 px-4">Rôle: {{ $user->role }}</div>
                <div class="py-2 px-4 border-b">
                    <a href="{{ route('users.edit', $user->id) }}" class="text-yellow-500">Modifier</a>
                </div>
            </div>
        </div>

    </div>

    <!-- <div>
    {{ $user->name }}
    {{ $user->email }}
    {{ $user->role }}
  </div> -->
</x-app-layout>
