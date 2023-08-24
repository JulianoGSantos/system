<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @extends('client.layouts.home')
</head>
<body>
    <header>
        <div class=" grid justify-center w-screen h-32 content bg-blue-400 p-12">
            <div class=" text-4xl">CONTROLE DE DADOS PACIENTES</div>
        </div>
    </header>
    <main>
        <div class=" w-full h-96 grid grid-cols-3 justify-items-center">
            <div class="grid h-3 mt-14"><img src="paciente.png" alt=""></div>
            <div class="grid h-3 mt-14"><img src="formulario.png" alt=""></div>
            <div class="grid h-3 mt-14"><img src="calendario.png" alt=""></div>
            <div class=""><a href=" {{ route ('index.client') }}"><div class="grid justify-items-center mt-44 bg-slate-400 h-8 w-64 rounded-lg ring-2 ring-black">CADASTRAR PACIENTE</div></a></div>
            <div class=""><a href=" {{ route('search.client') }}"><div class="grid justify-items-center mt-44 bg-slate-400 h-8 w-64 rounded-lg ring-2 ring-black">BUSCAR PACIENTE</div></a></div>
            <div class=""><a href=" {{ route('search.event') }}"><div class="grid justify-items-center mt-44 bg-slate-400 h-8 w-64 rounded-lg ring-2 ring-black">BUSCAR CONSULTA</div></a></div>
        </div>
    </main>
    <footer>
        <div class="container">
            <form action=" {{ route('logout') }}" method="POST">
            @csrf
            <div class=" grid mt-4 justify-items-center w-screen h-36 bg-black">
                <div class=" h-8 mt-16">
                    <button type="submit" class=" bg-red-400 px-4 py-1 rounded-xl text-white ring-1 flex ">SAIR</button>
                </div>
            </div>
            </form>
        </div>
    </footer>
</body>

</html>

