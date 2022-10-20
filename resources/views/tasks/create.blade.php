<x-layout page="B7Web Todo: Login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary"> 
            Voltar 
        </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form action="">
            <div class="inputArea">
                <label for="title">
                    Título da Task
                </label>
                <input name="title" placeholder="Digite o título da tarefa" required>
            </div>
        </form>
    </section>

</x-layout>