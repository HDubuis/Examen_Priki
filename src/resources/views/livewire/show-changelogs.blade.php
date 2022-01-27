<div>
    <h1 class="font-bold text-2xl uppercase">Historique de modification</h1>

    @foreach($practice->changelog as $changelog)
        <div>Utilisateur : {{$changelog->user->fullname}}</div>
        <div>Date de modification :{{$changelog->updated_at->translatedFormat('j F Y')}}</div>
        <div>Raison invoquée :{{$changelog->reason}}</div>
        <div>Titre précendent :{{$changelog->previously}}</div>
        </br>
    @endforeach
</div>
