<x-layout page="B7Web Todo: Login">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form action="">

            <x-form.text_input name="title" label="Título da Task" placeholder="Digite o título da sua task" required="required" />

            <x-form.text_input type="date" name="due_date" label="Data de Realização" required="required" />

            <x-form.select_input name="category_id" label="Categoria" placeholder="Digite o título da sua task">
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
            </x-form.select_input>

            <x-form.textarea_input 
                label="Descrição da Tarefa"
                name="description" 
                placeholder="Digite a descrição da tarefa"
            />

            <x-form.form_button resetTxt="Resetar" submitTxt="Criar uma Tarefa" />

        </form>
    </section>

</x-layout>
