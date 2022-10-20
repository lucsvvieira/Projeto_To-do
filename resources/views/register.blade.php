<x-layout page="B7Web Todo: Login">
        <x-slot:btn>
            <a href="{{ route('home') }}" class="btn btn-primary">
                Voltar
            </a>
        </x-slot:btn>
    
        <section id="task_section">
            <h1>Registrar-se</h1>
            <form method="POST" action="{{route('user.register_action')}}">
                @csrf
    
                <x-form.text_input name="name" label="Nome" placeholder="Digite seu nome completo" required="required" />
    
                <x-form.text_input type="email" name="email" label="E-mail" placeholder="Digite seu e-mail" required="required" />

                <x-form.text_input type="password" name="password" label="Senha" placeholder="Digite Sua Senha" required="required" />

                <x-form.text_input type="password" name="password_confirmation" label="Confirme sua senha" placeholder="Confirme sua senha" required="required" />
    
                <x-form.form_button resetTxt="Limpar" submitTxt="Registrar-se" />
    
            </form>
        </section>
    
</x-layout>