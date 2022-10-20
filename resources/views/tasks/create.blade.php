<x-layout page="B7Web Todo: Login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary"> 
            Voltar 
        </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form action="">
            <x-form.text_input name="title" label="Título da Task" placeholder="Digite o título da sua task" required="required" />
            <x-form.text_input type="date" name="due_date" label="Data de Realização" required="required" />
            <div class="inputArea">
                <label for="category">
                    Categoria
                </label>
                <select id="category" name="category" required>
                    <option selected disabled value="">
                        Selecione a categoria
                    </option>
                    <option value="">
                        Valor qualquer
                    </option>
                </select>
            </div>
            <div class="inputArea">
                <label for="title">
                    Descrição da tarefa
                </label>
                <textarea name="description" placeholder="Digite uma descrição para sua tarefa"></textarea>
            </div>

            <div class="inputArea">
                <button type="submit" class="btn btn-primary">
                    Criar Tarefa
                </button>
            </div>

        </form>
    </section>

</x-layout>