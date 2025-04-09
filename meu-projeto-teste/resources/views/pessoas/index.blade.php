<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
     <h1>Pessoas: </h1>
     @foreach ($pessoas as $pessoa)
        <div>
            <h2>{{ $pessoa->nome }}</h2>
            <p>{{ $pessoa->idade }}</p>
            <p>{{ $pessoa->cpf }}</p>
        </div>
     @endforeach
</div>
