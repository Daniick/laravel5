<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav>
        <ul class="flex justify-between mt-4 mx-auto max-w-md">
            <li>Agregar Usuarios</li>
            <li>
                <button class="border py-1 px-2 text-white bg-[#014C6B] rounded-md relative w-[170px]">
                    <span class="absolute left-0 bottom-0 inset-y-0 flex items-center pl-2">
                        <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 9h14a1 1 0 1 1 0 2H3a1 1 0 1 1 0-2zm0-4h14a1 1 0 1 1 0 2H3a1 1 0 1 1 0-2zm0 8h14a1 1 0 1 1 0 2H3a1 1 0 1 1 0-2z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    Volver al Listado
                </button>
            </li>
        </ul>
    </nav>

    <section class="mt-10 mx-auto max-w-md">
        <form action={{ route('estudiantes-store') }} method="POST">
            @csrf
            <div class="flex gap-10">
                <div class="flex text-gray-400 flex-col ">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" class="border-gray-700 border text-black w-[200px] mt-3 p-1" placeholder="Ingrese el Nombre">
                </div>
                <div class="flex text-gray-400 flex-col">
                    <label for="">Apellido</label>
                    <input type="text" name="apellido" class="border-gray-700 border text-black w-[200px] mt-3 p-1" placeholder="Ingrese el Apellido">
                </div>
            </div>
            <div class="flex text-gray-400 flex-col mt-6 ">
                <label for="">E-mail</label>
                <input type="email" name="email" class="border-gray-700 border text-black w-[440px] mt-3 p-1" placeholder="Ingrese el E-mail">
            </div>
            <div class="flex text-gray-400 flex-col mt-6">
                <label for="">Contraseña</label>
                <input type="password" name="contrasena" class="border-gray-700 border text-black w-[200px] mt-3 p-1" placeholder="Ingrese la Contraseña">
            </div>
            <div class="flex justify-center mt-10"><button class="border py-1 px-2 text-white bg-[#014C6B] rounded-md relative w-[220px]">Guardar</button></div>

        </form>
    </section>
</body>

</html>