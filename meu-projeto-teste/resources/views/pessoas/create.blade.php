<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
     <h1>Criar Pessoa</h1>

     <form action="{{route('pessoas.store')}}" method="post">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="idade">Idade:</label>
            <input type="text" id="idade" name="idade" required>
            
            <label for="cpf">Cpf:</label>
            <input type="text" id="cpf" name="cpf" required>

            <button type="submit">Enviar</button>
        </div>
     </form>
</div>
