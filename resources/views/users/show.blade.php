<x-app-layout>
  <table class="text-white">
    <div class="text-white">
      <h1 class="text-2xl font-bold mb-6">Détails de l'utilisateur</h1>
      <div>
        <div class="py-2 px-4">Nom: {{ $user->name }}</div>
        <div class="py-2 px-4">Email: {{ $user->email }}</div>
        <div class="py-2 px-4">Rôle: {{ $user->role }}</div>
        <!-- <div class="py-2 px-4 border-b">
        <a href="{{ route('users.edit', $user->id) }}" class="text-yellow-500">Modifier</a>
      </div> -->
      </div>
    </div>
  </table>
  <!-- <div>
    {{ $user->name }}
    {{ $user->email }}
    {{ $user->role }}
  </div> -->
</x-app-layout>